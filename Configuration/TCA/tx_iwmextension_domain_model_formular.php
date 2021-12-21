<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:iwm_extension/Resources/Private/Language/locallang_db.xlf:tx_iwmextension_domain_model_formular',
        'label' => 'name',
        'iconfile' => 'EXT:iwm_extension/Resources/Public/Icons/Formular.svg',
    ],
    'columns' => [
        'firstname' => [
            'label' => 'LLL:EXT:iwm_extension/Resources/Private/Language/locallang_db.xlf:tx_iwmextension_domain_model_formular.firstname',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
            ],
        ],
        'lastname' => [
            'label' => 'LLL:EXT:iwm_extension/Resources/Private/Language/locallang_db.xlf:tx_iwmextension_domain_model_formular.lastname',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
            ],
        ],
        'email' => [
            'label' => 'LLL:EXT:iwm_extension/Resources/Private/Language/locallang_db.xlf:tx_iwmextension_domain_model_formular.email',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ],
        ],
        'profilepicture' => [
            'label' => 'LLL:EXT:iwm_extension/Resources/Private/Language/locallang_db.xlf:tx_iwmextension_domain_model_formular.profilepicture',
            'config' => [
                'type' => 'input',
                'size' => '255',
                'eval' => 'trim',
            ],
        ],
        'password' => [
            'label' => 'LLL:EXT:iwm_extension/Resources/Private/Language/locallang_db.xlf:tx_iwmextension_domain_model_formular.password',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
            ],
        ],
        'birthdate' => [
            'label' => 'LLL:EXT:iwm_extension/Resources/Private/Language/locallang_db.xlf:tx_iwmextension_domain_model_formular.birthdate',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'firstname, lastname, email, profilepicture, password, birthdate'],
    ],
];