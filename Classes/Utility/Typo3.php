<?php

class Tx_Smarty_Utility_Typo3
{
    /**
     * @return bool
     * @SuppressWarnings(PHPMD.CamelCaseVariableName)
     */
    public static function isFeInstance()
    {
        return (TYPO3_MODE === 'FE' && $GLOBALS['TSFE'] instanceof \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController);
    }

    /**
     * @return bool
     * @SuppressWarnings(PHPMD.CamelCaseVariableName)
     */
    public static function isBeInstance()
    {
        return (TYPO3_MODE === 'BE' && $GLOBALS['BE_USER'] instanceof \TYPO3\CMS\Backend\FrontendBackendUserAuthentication);
    }

    /**
     * @return bool
     */
    public static function isCliMode()
    {
        return (defined('TYPO3_CLI_MODE') && TYPO3_CLI_MODE) ? true : false;
    }
}
