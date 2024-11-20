<?php 
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

$API_KEY = getenv('API_KEY');
$url = "https://api.hgbrasil.com/weather?woeid=455830?key=".$API_KEY;
$api = json_decode(file_get_contents($url));

require 'src/show_api.php';
?>