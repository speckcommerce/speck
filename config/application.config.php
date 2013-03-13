<?php
return array(
    'modules' => array(
        'SpeckInstall',
        'AtPhpSettings',
        'Application',
        'EdpSubLayout',
        'ZfcUser',
        'ZfcBase',
        'SpeckMultisite',
        'SpeckCart',
        'SpeckCatalog',
        'SpeckAddress',
        'SpeckUserAddress',
        //'SpeckUserDashboard',
        'SpeckImageUploader',
        'SpeckCheckout',
        'SpeckContact',
        'SpeckOrder',
        'ZfcAdmin',
        'SpeckRandomProducts',
        'AssetManager',
        'Assetic',
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
