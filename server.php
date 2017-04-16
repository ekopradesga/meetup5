<?php 
// variable
$publicPath = 'public/';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = urldecode($uri);
$requested = $publicPath . $uri;
if (($uri !== '/') && file_exists($requested)) {
	return false;
}
require_once $publicPath . 'index.php';
// kode
?>