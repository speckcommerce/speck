<?php
return array(
    'modules' => array(
        'Application',
        'SpiffyDoctrine',
        'EdpUser',
        'EdpCommon',
        'SpeckCatalog',
    ),
    'module_listener_options' => array( 
        'config_cache_enabled'    => false,
        'cache_dir'               => './data/cache',
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
