<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
include 'init_autoloader.php';

$config = include 'config/application.config.php';
$host   = $_SERVER['HTTP_HOST'];
$file   = 'config/' . $host . '.modules.php';
if (file_exists($file)) {
    $config = \Zend\Stdlib\ArrayUtils::merge($config, include $file);
}

// Run the application!
Zend\Mvc\Application::init($config)->run();
