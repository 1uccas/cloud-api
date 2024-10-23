<?php 
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

$API_KEY = getenv('API_KEY');

$url = "https://api.hgbrasil.com/weather?key=".$API_KEY;
$api = json_decode(file_get_contents($url));

var_dump($api);

?>