<?php
return array(
    'modules' => array(
        'Application',
        'ZfcUser',
        'ZfcBase',
        //'SpeckCatalog',
        //'SpeckBase',
    ),
    'module_listener_options' => array( 
        'config_cache_enabled'    => false,
        'cache_dir'               => './data/cache',
        'module_paths' => array(
            //'../devmodules',
            './moduledev',
            './module',
            './vendor',
        ),
    ),
);
