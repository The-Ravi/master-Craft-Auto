<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| DATABASE CONFIGURATION TEMPLATE
| -------------------------------------------------------------------
| Copy this file to application/config/database.php and update
| the values according to your local environment.
|
| IMPORTANT: Never commit your actual database credentials to Git!
| -------------------------------------------------------------------
*/

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',           // Change to your database host
	'username' => 'your_username',       // Change to your database username
	'password' => 'your_password',       // Change to your database password
	'database' => 'your_database_name',  // Change to your database name
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

/*
| -------------------------------------------------------------------
| EXAMPLE CONFIGURATIONS
| -------------------------------------------------------------------
|
| Local Development:
| 'hostname' => 'localhost',
| 'username' => 'root',
| 'password' => '',
| 'database' => 'mastercraft_local',
|
| Production:
| 'hostname' => 'your-production-host.com',
| 'username' => 'prod_user',
| 'password' => 'secure_password',
| 'database' => 'production_db',
|
*/