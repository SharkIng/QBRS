<?php
/*
 * Database Connection info
 * Author: @QBRS Group
 */

// Define Database Connection
define('DB_HOST','localhost');
define('DB_USER','qbrs');
define('DB_PWD','wxd8rAaHp86MHKVG');
define('DB_DBNAME','qbrs');
define('DB_CHARSET','utf8');

// Using MySQL
$dbc = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_DBNAME);
$db_char = DB_CHARSET;
$dbc->query("SET NAMES utf8");

// Site Name
$site_name = "QBRS | Queen's Bicycle Registery System";