<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:iwm_extension/Resources/Private/Language/locallang_db.xlf:tx_iwmextension_login',
        'label' => 'name',
        'iconfile' => 'EXT:iwm_extension/Resources/Public/Icons/Login.svg',
    ],
    'columns' => [
        'email' => [
            'label' => 'LLL:EXT:iwm_extension/Resources/Private/Language/locallang_db.xlf:tx_iwmextension_login.email',
            'config' => [
                'type' => 'input',
                'size' => '40',
                'eval' => 'trim',
            ],
        ],
        'password' => [
            'label' => 'LLL:EXT:iwm_extension/Resources/Private/Language/locallang_db.xlf:tx_iwmextension_login.password',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'email, password'],
    ],
];