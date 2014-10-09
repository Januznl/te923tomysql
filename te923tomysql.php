<?php

/**
 * Settings
 */
$mysql_server   = '127.0.0.1';
$mysql_user     = 'root';
$mysql_password = 'lokaal';
$mysql_database = 'te';
$te923tool      = './te923tool';
$debug          = true;
$mock           = true;


/**
 * init
 */
require_once __DIR__.'/class/mapper.php';
require_once __DIR__.'/class/mysql.php';
require_once __DIR__.'/class/te923tomysql.php';
require_once __DIR__.'/class/te923tool.php';



/**
 * Main App
 */

$app = new TE923ToMysql();
$app->init($mysql_server, $mysql_user, $mysql_password, $mysql_database, $te923tool, $debug, $mock);










