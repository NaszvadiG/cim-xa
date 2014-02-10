<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package CoreAdminHome
 */
namespace Piwik\Plugins\CoreAdminHome;

use Exception;
use Piwik\API\ResponseBuilder;
use Piwik\ArchiveProcessor\Rules;
use Piwik\Common;
use Piwik\Config;
use Piwik\DataTable\Renderer\Json;
use Piwik\Menu\MenuTop;
use Piwik\Nonce;
use Piwik\Piwik;
use Piwik\Plugins\LanguagesManager\API as APILanguagesManager;
use Piwik\Plugins\LanguagesManager\LanguagesManager;
use Piwik\Plugins\SitesManager\API as APISitesManager;
use Piwik\Settings\Manager as SettingsManager;
use Piwik\Site;
use Piwik\Tracker\IgnoreCookie;
use Piwik\Url;
use Piwik\View;

/**
 *
 * @package CoreAdminHome
 */
class Controller extends \Piwik\Plugin\ControllerAdmin
{
    const SET_PLUGIN_SETTINGS_NONCE = 'CoreAdminHome.setPluginSettings';

    public function index()
    {
        $this->redirectToIndex('UsersManager', 'userSettings');
        return;
    }

    public function generalSettings()
    {
        Piwik::checkUserHasSomeAdminAccess();
        $view = new View('@CoreAdminHome/generalSettings');

        if (Piwik::isUserIsSuperUser()) {
            $this->handleGeneralSettingsAdmin($view);

            $trustedHosts = array();
            if (isset(Config::getInstance()->General['trusted_hosts'])) {
                $trustedHosts = Config::getInstance()->General['trusted_hosts'];
            }
            $view->trustedHosts = $trustedHosts;

            $view->branding = Config::getInstance()->branding;

            $logo = new CustomLogo();
            $view->logosWriteable = $logo->isCustomLogoWritable();
            $view->pathUserLogo = CustomLogo::getPathUserLogo();
            $view->pathUserLogoSmall = CustomLogo::getPathUserLogoSmall();
            $view->pathUserLogoSVG = CustomLogo::getPathUserSvgLogo();
            $view->pathUserLogoDirectory = dirname($view->pathUserLogo) . '/';
        }

        $view->language = LanguagesManager::getLanguageCodeForCurrentUser();
        $this->setBasicVariablesView($view);
        return $view->render();
    }

    public function pluginSettings()
    {
        Piwik::checkUserIsNotAnonymous();

        $settings = $this->getPluginSettings();

        $view = new View('@CoreAdminHome/pluginSettings');
        $view->nonce          = Nonce::getNonce(static::SET_PLUGIN_SETTINGS_NONCE);
        $view->pluginSettings = $settings;
        $view->firstSuperUserSettingNames = $this->getFirstSuperUserSettingNames($settings);

        $this->setBasicVariablesView($view);

        return $view->render();
    }

    private function getPluginSettings()
    {
        $pluginsSettings = SettingsManager::getPluginSettingsForCurrentUser();

        ksort($pluginsSettings);

        return $pluginsSettings;
    }

    /**
     * @param \Piwik\Plugin\Settings[] $pluginsSettings
     * @return array   array([pluginName] => [])
     */
    private function getFirstSuperUserSettingNames($pluginsSettings)
    {
        $names = array();
        foreach ($pluginsSettings as $pluginName => $pluginSettings) {

            foreach ($pluginSettings->getSettingsForCurrentUser() as $setting) {
                if ($setting instanceof \Piwik\Settings\SystemSetting) {
                    $names[$pluginName] = $setting->getName();
                    break;
                }
            }
        }

        return $names;
    }

    public function setPluginSettings()
    {
        Piwik::checkUserIsNotAnonymous();
        Json::sendHeaderJSON();

        $nonce = Common::getRequestVar('nonce', null, 'string');

        if (!Nonce::verifyNonce(static::SET_PLUGIN_SETTINGS_NONCE, $nonce)) {
            return json_encode(array(
                'result' => 'error',
                'message' => Piwik::translate('General_ExceptionNonceMismatch')
            ));
        }

        $pluginsSettings = SettingsManager::getPluginSettingsForCurrentUser();

        try {

            foreach ($pluginsSettings as $pluginName => $pluginSetting) {
                foreach ($pluginSetting->getSettingsForCurrentUser() as $setting) {

                    $value = $this->findSettingValueFromRequest($pluginName, $setting->getKey());

                    if (!is_null($value)) {
                        $setting->setValue($value);
                    }
                }
            }

            foreach ($pluginsSettings as $pluginSetting) {
                $pluginSetting->save();
            }

        } catch (Exception $e) {
            $message = html_entity_decode($e->getMessage(), ENT_QUOTES, 'UTF-8');
            return json_encode(array('result' => 'error', 'message' => $message));
        }
        
        Nonce::discardNonce(static::SET_PLUGIN_SETTINGS_NONCE);
        return json_encode(array('result' => 'success'));
    }

    private function findSettingValueFromRequest($pluginName, $settingKey)
    {
        $changedPluginSettings = Common::getRequestVar('settings', null, 'array');

        if (!array_key_exists($pluginName, $changedPluginSettings)) {
            return;
        }

        $settings = $changedPluginSettings[$pluginName];

        foreach ($settings as $setting) {
            if ($setting['name'] == $settingKey) {
                return $setting['value'];
            }
        }
    }

    public function setGeneralSettings()
    {
        Piwik::checkUserIsSuperUser();
        $response = new ResponseBuilder(Common::getRequestVar('format'));
        try {
            $this->checkTokenInUrl();

            $this->saveGeneralSettings();

            // update trusted host settings
            $trustedHosts = Common::getRequestVar('trustedHosts', false, 'json');
            if ($trustedHosts !== false) {
                Url::saveTrustedHostnameInConfig($trustedHosts);
            }

            // update branding settings
            $branding = Config::getInstance()->branding;
            $branding['use_custom_logo'] = Common::getRequestVar('useCustomLogo', '0');
            Config::getInstance()->branding = $branding;

            Config::getInstance()->forceSave();

            $toReturn = $response->getResponse();
        } catch (Exception $e) {
            $toReturn = $response->getResponseException($e);
        }

        return $toReturn;
    }

    /**
     * Renders and echo's an admin page that lets users generate custom JavaScript
     * tracking code and custom image tracker links.
     */
    public function trackingCodeGenerator()
    {
        $view = new View('@CoreAdminHome/trackingCodeGenerator');
        $this->setBasicVariablesView($view);
        $view->topMenu = MenuTop::getInstance()->getMenu();

        $viewableIdSites = APISitesManager::getInstance()->getSitesIdWithAtLeastViewAccess();

        $defaultIdSite = reset($viewableIdSites);
        $view->idSite = Common::getRequestVar('idSite', $defaultIdSite, 'int');

        $view->defaultReportSiteName = Site::getNameFor($view->idSite);
        $view->defaultSiteRevenue = \Piwik\MetricsFormatter::getCurrencySymbol($view->idSite);

        $allUrls = APISitesManager::getInstance()->getSiteUrlsFromId($view->idSite);
        if (isset($allUrls[1])) {
            $aliasUrl = $allUrls[1];
        } else {
            $aliasUrl = 'x.domain.com';
        }
        $view->defaultReportSiteAlias = $aliasUrl;

        $mainUrl = Site::getMainUrlFor($view->idSite);
        $view->defaultReportSiteDomain = @parse_url($mainUrl, PHP_URL_HOST);

        // get currencies for each viewable site
        $view->currencySymbols = APISitesManager::getInstance()->getCurrencySymbols();

        $view->serverSideDoNotTrackEnabled = \Piwik\Plugins\PrivacyManager\DoNotTrackHeaderChecker::isActive();

        return $view->render();
    }

    /**
     * Shows the "Track Visits" checkbox.
     */
    public function optOut()
    {
        $trackVisits = !IgnoreCookie::isIgnoreCookieFound();

        $nonce = Common::getRequestVar('nonce', false);
        $language = Common::getRequestVar('language', '');
        if ($nonce !== false && Nonce::verifyNonce('Piwik_OptOut', $nonce)) {
            Nonce::discardNonce('Piwik_OptOut');
            IgnoreCookie::setIgnoreCookie();
            $trackVisits = !$trackVisits;
        }

        $view = new View('@CoreAdminHome/optOut');
        $view->trackVisits = $trackVisits;
        $view->nonce = Nonce::getNonce('Piwik_OptOut', 3600);
        $view->language = APILanguagesManager::getInstance()->isLanguageAvailable($language)
            ? $language
            : LanguagesManager::getLanguageCodeForCurrentUser();
        return $view->render();
    }

    public function uploadCustomLogo()
    {
        Piwik::checkUserIsSuperUser();

        $logo = new CustomLogo();
        $success = $logo->copyUploadedLogoToFilesystem();

        if($success) {
            return '1';
        }
        return '0';
    }

    private function isGeneralSettingsAdminEnabled()
    {
        return (bool) Config::getInstance()->General['enable_general_settings_admin'];
    }

    private function saveGeneralSettings()
    {
        if(!$this->isGeneralSettingsAdminEnabled()) {
            // General settings + Beta channel + SMTP settings is disabled
            return;
        }

        // General Setting
        $enableBrowserTriggerArchiving = Common::getRequestVar('enableBrowserTriggerArchiving');
        $todayArchiveTimeToLive = Common::getRequestVar('todayArchiveTimeToLive');
        Rules::setBrowserTriggerArchiving((bool)$enableBrowserTriggerArchiving);
        Rules::setTodayArchiveTimeToLive($todayArchiveTimeToLive);

        // update beta channel setting
        $debug = Config::getInstance()->Debug;
        $debug['allow_upgrades_to_beta'] = Common::getRequestVar('enableBetaReleaseCheck', '0', 'int');
        Config::getInstance()->Debug = $debug;

        // Update email settings
        $mail = array();
        $mail['transport'] = (Common::getRequestVar('mailUseSmtp') == '1') ? 'smtp' : '';
        $mail['port'] = Common::getRequestVar('mailPort', '');
        $mail['host'] = Common::unsanitizeInputValue(Common::getRequestVar('mailHost', ''));
        $mail['type'] = Common::getRequestVar('mailType', '');
        $mail['username'] = Common::unsanitizeInputValue(Common::getRequestVar('mailUsername', ''));
        $mail['password'] = Common::unsanitizeInputValue(Common::getRequestVar('mailPassword', ''));
        $mail['encryption'] = Common::getRequestVar('mailEncryption', '');

        Config::getInstance()->mail = $mail;
    }

    private function handleGeneralSettingsAdmin($view)
    {
        // Whether to display or not the general settings (cron, beta, smtp)
        $view->isGeneralSettingsAdminEnabled = $this->isGeneralSettingsAdminEnabled();

        $enableBrowserTriggerArchiving = Rules::isBrowserTriggerEnabled();
        $todayArchiveTimeToLive = Rules::getTodayArchiveTimeToLive();
        $showWarningCron = false;
        if (!$enableBrowserTriggerArchiving
            && $todayArchiveTimeToLive < 3600
        ) {
            $showWarningCron = true;
        }
        $view->showWarningCron = $showWarningCron;
        $view->todayArchiveTimeToLive = $todayArchiveTimeToLive;
        $view->enableBrowserTriggerArchiving = $enableBrowserTriggerArchiving;


        $view->enableBetaReleaseCheck = Config::getInstance()->Debug['allow_upgrades_to_beta'];
        $view->mail = Config::getInstance()->mail;
        $this->displayWarningIfConfigFileNotWritable();
    }


}
