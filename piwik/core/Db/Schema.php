<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik
 * @package Piwik
 */
namespace Piwik\Db;

use Piwik\Config;
use Piwik\Singleton;

/**
 * Schema abstraction
 *
 * Note: no relation to the ZF proposals for Zend_Db_Schema_Manager
 *
 * @package Piwik
 * @subpackage Piwik_Db
 * @method static \Piwik\Db\Schema getInstance()
 */
class Schema extends Singleton
{

    /**
     * Type of database schema
     *
     * @var string
     */
    private $schema = null;


    /**
     * Get schema class name
     *
     * @param string $schemaName
     * @return string
     */
    private static function getSchemaClassName($schemaName)
    {
        return '\Piwik\Db\Schema\\' . str_replace(' ', '\\', ucwords(str_replace('_', ' ', strtolower($schemaName))));
    }

    /**
     * Get list of schemas
     *
     * @param string $adapterName
     * @return array
     */
    public static function getSchemas($adapterName)
    {
        static $allSchemaNames = array(
            // MySQL storage engines
            'MYSQL' => array(
                'Myisam',
//				'Innodb',
//				'Infinidb',
            ),

            // Microsoft SQL Server
//			'MSSQL' => array( 'Mssql' ),

            // PostgreSQL
//			'PDO_PGSQL' => array( 'Pgsql' ),

            // IBM DB2
//			'IBM' => array( 'Ibm' ),

            // Oracle
//			'OCI' => array( 'Oci' ),
        );

        $adapterName = strtoupper($adapterName);
        switch ($adapterName) {
            case 'PDO_MYSQL':
            case 'MYSQLI':
                $adapterName = 'MYSQL';
                break;

            case 'PDO_MSSQL':
            case 'SQLSRV':
                $adapterName = 'MSSQL';
                break;

            case 'PDO_IBM':
            case 'DB2':
                $adapterName = 'IBM';
                break;

            case 'PDO_OCI':
            case 'ORACLE':
                $adapterName = 'OCI';
                break;
        }
        $schemaNames = $allSchemaNames[$adapterName];

        $schemas = array();

        foreach ($schemaNames as $schemaName) {
            $className = __NAMESPACE__ . '\\Schema\\' . $schemaName;
            if (call_user_func(array($className, 'isAvailable'))) {
                $schemas[] = $schemaName;
            }
        }

        return $schemas;
    }

    /**
     * Load schema
     */
    private function loadSchema()
    {
        $config = Config::getInstance();
        $dbInfos = $config->database;
        if (isset($dbInfos['schema'])) {
            $schemaName = $dbInfos['schema'];
        } else {
            $schemaName = 'Myisam';
        }
        $className = self::getSchemaClassName($schemaName);
        $this->schema = new $className();
    }

    /**
     * Returns an instance that subclasses Schema
     *
     * @return \Piwik\Db\SchemaInterface
     */
    private function getSchema()
    {
        if ($this->schema === null) {
            $this->loadSchema();
        }
        return $this->schema;
    }

    /**
     * Get the SQL to create a specific Piwik table
     *
     * @param string $tableName name of the table to create
     * @return string  SQL
     */
    public function getTableCreateSql($tableName)
    {
        return $this->getSchema()->getTableCreateSql($tableName);
    }

    /**
     * Get the SQL to create Piwik tables
     *
     * @return array   array of strings containing SQL
     */
    public function getTablesCreateSql()
    {
        return $this->getSchema()->getTablesCreateSql();
    }

    /**
     * Create database
     *
     * @param null|string $dbName database name to create
     */
    public function createDatabase($dbName = null)
    {
        $this->getSchema()->createDatabase($dbName);
    }

    /**
     * Drop database
     */
    public function dropDatabase()
    {
        $this->getSchema()->dropDatabase();
    }

    /**
     * Create all tables
     */
    public function createTables()
    {
        $this->getSchema()->createTables();
    }

    /**
     * Creates an entry in the User table for the "anonymous" user.
     */
    public function createAnonymousUser()
    {
        $this->getSchema()->createAnonymousUser();
    }

    /**
     * Truncate all tables
     */
    public function truncateAllTables()
    {
        $this->getSchema()->truncateAllTables();
    }

    /**
     * Drop specific tables
     *
     * @param array $doNotDelete
     */
    public function dropTables($doNotDelete = array())
    {
        $this->getSchema()->dropTables($doNotDelete);
    }

    /**
     * Names of all the prefixed tables in piwik
     * Doesn't use the DB
     *
     * @return array Table names
     */
    public function getTablesNames()
    {
        return $this->getSchema()->getTablesNames();
    }

    /**
     * Get list of tables installed
     *
     * @param bool $forceReload Invalidate cache
     * @return array  installed tables
     */
    public function getTablesInstalled($forceReload = true)
    {
        return $this->getSchema()->getTablesInstalled($forceReload);
    }

    /**
     * Returns true if Piwik tables exist
     *
     * @return bool  True if tables exist; false otherwise
     */
    public function hasTables()
    {
        return $this->getSchema()->hasTables();
    }
}
