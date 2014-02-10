<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package ExampleVisualization
 */
namespace Piwik\Plugins\ExampleVisualization;

/**
 * @package ExampleVisualization
 */
class ExampleVisualization extends \Piwik\Plugin
{
    /**
     * @see Piwik_Plugin::getListHooksRegistered
     */
    public function getListHooksRegistered()
    {
        return array(
            'ViewDataTable.addViewDataTable' => 'getAvailableVisualizations'
        );
    }

    public function getAvailableVisualizations(&$visualizations)
    {
        $visualizations[] = __NAMESPACE__ . '\\SimpleTable';
    }
}
