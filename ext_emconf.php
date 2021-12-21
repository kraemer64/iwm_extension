<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'IWM Extension',
    'description' => 'An extension for IWM',
    'category' => 'plugin',
    'author' => 'Daniel Krämer',
    'author_company' => 'Company',
    'author_email' => 'danielkraemer1@gmx.net',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
    ],
];