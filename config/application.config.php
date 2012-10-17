<?php
return array(
    'modules' => array(
        'Application',
        'ZfcUser',
        'ZfcBase',
        //'SpeckMultisite',
        'SpeckCart',
        'SpeckCatalog',
        'SpeckAddress',
        'SpeckUserAddress',
        //'SpeckUserDashboard',
        'SpeckImageUploader',
        'SpeckCheckout',
        'SpeckContact',
        'ZfcAdmin',
        'SpeckRandomProducts',
        'AssetManager',
        'Assetic',
        'SwmCatalogLayout',
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
