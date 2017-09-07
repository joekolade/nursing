<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Joekolade.Nursing',
            'List',
            'List'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('nursing', 'Configuration/TypoScript', 'Pflegeberufe');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nursing_domain_model_position', 'EXT:nursing/Resources/Private/Language/locallang_csh_tx_nursing_domain_model_position.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nursing_domain_model_position');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nursing_domain_model_employment', 'EXT:nursing/Resources/Private/Language/locallang_csh_tx_nursing_domain_model_employment.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nursing_domain_model_employment');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nursing_domain_model_employer', 'EXT:nursing/Resources/Private/Language/locallang_csh_tx_nursing_domain_model_employer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nursing_domain_model_employer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nursing_domain_model_location', 'EXT:nursing/Resources/Private/Language/locallang_csh_tx_nursing_domain_model_location.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nursing_domain_model_location');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nursing_domain_model_region', 'EXT:nursing/Resources/Private/Language/locallang_csh_tx_nursing_domain_model_region.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nursing_domain_model_region');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nursing_domain_model_type', 'EXT:nursing/Resources/Private/Language/locallang_csh_tx_nursing_domain_model_type.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nursing_domain_model_type');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nursing_domain_model_extra', 'EXT:nursing/Resources/Private/Language/locallang_csh_tx_nursing_domain_model_extra.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nursing_domain_model_extra');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nursing_domain_model_filter', 'EXT:nursing/Resources/Private/Language/locallang_csh_tx_nursing_domain_model_filter.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nursing_domain_model_filter');

    }
);
