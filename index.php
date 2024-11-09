<?php 
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

$API_KEY = getenv('API_KEY');
$url = "https://api.hgbrasil.com/weather?woeid=455830?key=".$API_KEY;
$api = json_decode(file_get_contents($url));

//full results in API
$results = $api->results;

$results_tomorrow = $results->forecast[1]; //FULL RESULTS OF TOMORROW!

$date = $results->date;
$hour_time = $results->time;
$condition_description = $results->description;
$currently = $results->currently;

$city = $results->city;

#echo $results_tomorrow->description;


print($city."<br>");
print($currently."<br>");
print($condition_description."<br>");
print($hour_time."<br>");
print($date."<br>");
print_r($results);
?>