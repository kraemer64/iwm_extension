<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'MyVendor.IwmExtension',
    'IwmExtension',
    [
        'Form' => 'list',
        'Form' => 'redirect',
        'Form' => 'insertUser',
    ],
);