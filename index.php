<?php 
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

$url = "https://api.hgbrasil.com/weather";
$api = json_decode(file_get_contents($url));

var_dump($api);

?>