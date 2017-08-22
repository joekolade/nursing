<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Joekolade.Nursing',
            'List',
            [
                'Position' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Position' => 'list, show'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    list {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('nursing') . 'Resources/Public/Icons/user_plugin_list.svg
                        title = LLL:EXT:nursing/Resources/Private/Language/locallang_db.xlf:tx_nursing_domain_model_list
                        description = LLL:EXT:nursing/Resources/Private/Language/locallang_db.xlf:tx_nursing_domain_model_list.description
                        tt_content_defValues {
                            CType = list
                            list_type = nursing_list
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
