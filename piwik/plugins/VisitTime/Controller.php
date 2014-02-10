<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package VisitTime
 */
namespace Piwik\Plugins\VisitTime;

use Piwik\View;
use Piwik\ViewDataTable\Factory;

/**
 *
 * @package VisitTime
 */
class Controller extends \Piwik\Plugin\Controller
{
    public function index()
    {
        $view = new View('@VisitTime/index');
        $view->dataTableVisitInformationPerLocalTime = $this->getVisitInformationPerLocalTime(true);
        $view->dataTableVisitInformationPerServerTime = $this->getVisitInformationPerServerTime(true);
        return $view->render();
    }

    public function getVisitInformationPerServerTime()
    {
        return $this->renderReport(__FUNCTION__);
    }

    public function getVisitInformationPerLocalTime()
    {
        return $this->renderReport(__FUNCTION__);
    }

    public function getByDayOfWeek()
    {
        return $this->renderReport(__FUNCTION__);
    }
}
