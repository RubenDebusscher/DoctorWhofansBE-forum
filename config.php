<?php

// phpBB 3.3.x / 3.2.x configuration file

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

// safeLoad() zorgt dat hij niet crasht als .env niet bestaat
if (class_exists('Dotenv\Dotenv')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->safeLoad();
}

// Helper om zowel $_ENV als getenv netjes te checken
function env($key, $default = '') {
    return $_ENV[$key] ?? getenv($key) ?: $default;
}

$dbms                   = 'phpbb\\db\\driver\\mysqli';
$dbhost                 = env('dbHostNonP');
$dbport                 = env('dbPort', '');
$dbname                 = env('dbForum');
$dbuser                 = env('dbForumUser');
$dbpasswd               = env('dbPassF');
$table_prefix           = 'phpbb_';
$phpbb_adm_relative_path = 'adm/';
$acm_type               = 'phpbb\\cache\\driver\\file';

@define('PHPBB_INSTALLED', true);
@define('PHPBB_ENVIRONMENT', 'production');