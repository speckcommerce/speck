<?php
return array(
    'modules' => array(
        'Application',
        'ZfcUser',
        'ZfcBase',
        'SpeckCart',
        'SpeckCatalog',
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
