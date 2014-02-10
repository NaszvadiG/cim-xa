<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @package Piwik
 */

use Piwik\Common;
use Piwik\Timer;
use Piwik\Tracker;

$GLOBALS['PIWIK_TRACKER_DEBUG'] = false;
$GLOBALS['PIWIK_TRACKER_DEBUG_FORCE_SCHEDULED_TASKS'] = false;
define('PIWIK_ENABLE_TRACKING', true);

define('PIWIK_DOCUMENT_ROOT', dirname(__FILE__) == '/' ? '' : dirname(__FILE__));
if (file_exists(PIWIK_DOCUMENT_ROOT . '/bootstrap.php')) {
    require_once PIWIK_DOCUMENT_ROOT . '/bootstrap.php';
}

$GLOBALS['PIWIK_TRACKER_MODE'] = true;
error_reporting(E_ALL | E_NOTICE);
@ini_set('xdebug.show_exception_trace', 0);
@ini_set('magic_quotes_runtime', 0);

if (!defined('PIWIK_USER_PATH')) {
    define('PIWIK_USER_PATH', PIWIK_DOCUMENT_ROOT);
}
if (!defined('PIWIK_INCLUDE_PATH')) {
    define('PIWIK_INCLUDE_PATH', PIWIK_DOCUMENT_ROOT);
}

@ignore_user_abort(true);

require_once PIWIK_INCLUDE_PATH . '/libs/upgradephp/upgrade.php';
require_once PIWIK_INCLUDE_PATH . '/core/testMinimumPhpVersion.php';
require_once PIWIK_INCLUDE_PATH . '/core/Singleton.php';
require_once PIWIK_INCLUDE_PATH . '/core/Plugin/Manager.php';
require_once PIWIK_INCLUDE_PATH . '/core/Plugin.php';
require_once PIWIK_INCLUDE_PATH . '/core/Common.php';
require_once PIWIK_INCLUDE_PATH . '/core/Piwik.php';
require_once PIWIK_INCLUDE_PATH . '/core/IP.php';
require_once PIWIK_INCLUDE_PATH . '/core/UrlHelper.php';
require_once PIWIK_INCLUDE_PATH . '/core/Url.php';
require_once PIWIK_INCLUDE_PATH . '/core/SettingsPiwik.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker.php';
require_once PIWIK_INCLUDE_PATH . '/core/Config.php';
require_once PIWIK_INCLUDE_PATH . '/core/Translate.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/Cache.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/Db.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/Db/DbException.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/IgnoreCookie.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/VisitInterface.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/Visit.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/GoalManager.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/PageUrl.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/TableLogAction.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/Action.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/ActionClickUrl.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/ActionEvent.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/ActionPageview.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/ActionSiteSearch.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/Request.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/Referrer.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/VisitExcluded.php';
require_once PIWIK_INCLUDE_PATH . '/core/Tracker/VisitorNotFoundInDb.php';
require_once PIWIK_INCLUDE_PATH . '/core/CacheFile.php';
require_once PIWIK_INCLUDE_PATH . '/core/Filesystem.php';
require_once PIWIK_INCLUDE_PATH . '/core/Cookie.php';

session_cache_limiter('nocache');
@date_default_timezone_set('UTC');

if (!defined('PIWIK_ENABLE_TRACKING') || PIWIK_ENABLE_TRACKING) {
    ob_start();
}
if ($GLOBALS['PIWIK_TRACKER_DEBUG'] === true) {
    require_once PIWIK_INCLUDE_PATH . '/core/Loader.php';

    require_once PIWIK_INCLUDE_PATH . '/core/Error.php';
    \Piwik\Error::setErrorHandler();
    require_once PIWIK_INCLUDE_PATH . '/core/ExceptionHandler.php';
    \Piwik\ExceptionHandler::setUp();

    $timer = new Timer();
    Common::printDebug("Debug enabled - Input parameters: <br/>" . var_export($_GET, true));

    \Piwik\Tracker\Db::enableProfiling();
    \Piwik\FrontController::createConfigObject();
}

if (!defined('PIWIK_ENABLE_TRACKING') || PIWIK_ENABLE_TRACKING) {
    $process = new Tracker();

    try {
        $process->main();
    } catch (Exception $e) {
        echo "Error:" . $e->getMessage();
    }
    ob_end_flush();
    if ($GLOBALS['PIWIK_TRACKER_DEBUG'] === true) {
        Common::printDebug($_COOKIE);
        Common::printDebug($timer);
    }
}
