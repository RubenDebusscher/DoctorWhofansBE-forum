<?php

// phpBB 3.2.x auto-generated configuration file
// Do not change anything in this file!
// 1. Zorg voor het juiste pad naar de vendor autoloader
// __DIR__ zorgt ervoor dat het pad altijd klopt, ongeacht vanaf waar de script wordt aangeroepen
// 1. Laad de Composer autoloader als deze bestaat
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

// 2. Laad pas Dotenv in ALS de klasse ook echt geladen/beschikbaar is
if (class_exists('Dotenv\Dotenv')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->safeLoad();
}


$dbms = 'phpbb\\db\\driver\\mysqli';
$dbhost = $_ENV['dbHostNonP'] ?? getenv('dbHostNonP') ?: '';
$dbport = '';
$dbname = $_ENV['dbForum'] ?? getenv('v') ?:'';
$dbuser = $_ENV['dbForumUser'] ?? getenv('dbForumUser') ?: '';
$dbpasswd = $_ENV['dbPassF'] ?? getenv('dbPassF') ?: '';
$table_prefix = 'phpbb_';
$phpbb_adm_relative_path = 'adm/';
$acm_type = 'phpbb\\cache\\driver\\file';

@define('PHPBB_INSTALLED', true);
// @define('PHPBB_DISPLAY_LOAD_TIME', true);
@define('PHPBB_ENVIRONMENT', 'production');
// @define('DEBUG_CONTAINER', true);

