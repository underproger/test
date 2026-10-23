<?php  
chdir(__DIR__);

require_once('config.php');

$domain = parse_url(HTTP_SERVER);
$host = $domain['host'];
putenv('SERVER_NAME='.$host);
$_SERVER['SERVER_NAME'] = $host;
$_SERVER['REQUEST_METHOD'] = 'GET';

if (!isset($_SERVER['SERVER_PORT'])) {
  $_SERVER['SERVER_PORT'] = getenv('SERVER_PORT');
}

if (!empty($argv)) {
  array_shift($argv);
  parse_str(implode('&', $argv), $_GET);
}

define('GKD_CRON', true);

$_GET['route'] = 'feed/advanced_sitemap/cron';

require_once('index.php');