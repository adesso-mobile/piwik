<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package Piwik_VisitTime
 */
use Piwik\Controller;
use Piwik\ViewDataTable;
use Piwik\View;

/**
 *
 * @package Piwik_VisitTime
 */
class Piwik_VisitTime_Controller extends Controller
{
    public function index()
    {
        $view = new View('@VisitTime/index');
        $view->dataTableVisitInformationPerLocalTime = $this->getVisitInformationPerLocalTime(true);
        $view->dataTableVisitInformationPerServerTime = $this->getVisitInformationPerServerTime(true);
        echo $view->render();
    }

    public function getVisitInformationPerServerTime($fetch = false)
    {
        return ViewDataTable::renderReport($this->pluginName, __FUNCTION__, $fetch);
    }

    public function getVisitInformationPerLocalTime($fetch = false)
    {
        return ViewDataTable::renderReport($this->pluginName, __FUNCTION__, $fetch);
    }

    public function getByDayOfWeek($fetch = false)
    {
        return ViewDataTable::renderReport($this->pluginName, __FUNCTION__, $fetch);
    }
}
