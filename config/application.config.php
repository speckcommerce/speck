<?php
return array(
    'modules' => array(
        'Application',
        'ZfcUser',
        'ZfcBase',
        'SpeckMultisite',
        'SpeckCart',
        'SpeckCatalog',
        'SpeckAddress',
        'SpeckUserAddress',
        //'SpeckUserDashboard',
        'SpeckCheckout',
        'SpeckContact',
        'ZfcAdmin',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './devmodules',
            './module',
            './vendor',
        ),
    ),
);
