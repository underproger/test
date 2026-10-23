<?php

/*
 * CSV Price import/export OC3 CLI - v1.0.1 (18/03/2020)
 * Require OpenCart 3.x
 *
 * Email: support@costaslabs.com
 * Website: http://www.costaslabs.com/
 *
 * Changes:
 * v1.0.0 - first release for OpenCart 3.0.2.0
 *
 */

// Set to CSVPRICE_PRO_DEBUG = 1, if you wanna writing error log file
define('CSVPRICE_PRO_DEBUG', '0');

// configure OPENCART_ADMIN_DIR
define('OPENCART_ADMIN_DIR', '/home/user/www/example.com/admin');



// 0 - unlimit
ini_set('max_execution_time', 0);



$root_dir = realpath(str_replace(array('csvprice_pro_cli.php', 'cli'), array('', '') ,dirname(__FILE__)));

// Admin directory
$admin_dir = '';
if (file_exists($root_dir . '/admin/config.php')) {
	$admin_dir = $root_dir . '/admin';
} else {
	foreach (new DirectoryIterator($root_dir) as $dir_info) {
		if (!$dir_info->isDot() && $dir_info->isDir()) {
			$path = $dir_info->getPathname();
			if (file_exists($path . '/config.php')) {
				$admin_dir = $path;
				break;
			}
		}
	}
}
if (!$admin_dir) {
	if (file_exists(OPENCART_ADMIN_DIR . '/config.php')) {
		$admin_dir = OPENCART_ADMIN_DIR;
	}
}
if (!$admin_dir) {
	die("ERROR: cli cannot access to config.php");
}

// Config file
require_once ($admin_dir . '/config.php');

// Get VERSION
$content = file_get_contents($admin_dir . '/index.php');
preg_match("/define\('VERSION', '([0-9\.]+)/i", $content, $matches);
if (!isset($matches[1])) {
	die("ERROR: cli cannot get index.php");
} else {
	$version = $matches[1];
}
$version = substr($version, 0, 7);

// ALL
$version = '3.0.2.0';

// Startup
if (file_exists($root_dir . '/cli/' . $version . '/cli_framework.php')) {
	require_once($root_dir . '/cli/' . $version . '/cli_framework.php');
} else {
	die("ERROR: cli error startup cli_framework");
}
?>