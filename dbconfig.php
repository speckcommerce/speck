<?php

$user = $argv[1];
$pass = $argv[2];
$db   = $argv[3];
$host = 'localhost';

$config = include('config/autoload/database.local.php.dist');
$config['db']['username'] = $user;
$config['db']['password'] = $pass;
$config['db']['dsn'] = "mysql:dbname={$db};host={$host}";

$content = "<?php\nreturn " . var_export($config, 1) . ';';
file_put_contents('config/autoload/database.local.php', $content);
