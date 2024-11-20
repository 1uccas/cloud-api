<?php 

//full results in API
$results = $api->results;

$results_tomorrow = $results->forecast[1]; //FULL RESULTS OF TOMORROW!

$date = $results->date;
$hour_time = $results->time;
$condition_description = $results->description;
$currently = $results->currently;
$humidity = $results->humidity;
$city = $results->city;
$cloudiness = $results->cloudiness;
$rain = $results->rain;
$wind_speedy = $results->wind_speedy;
$wind_direction = $results->wind_direction;
$wind_cardinal = $results->wind_cardinal;
$sunrise = $results->sunrise;
$sunset = $results->sunset;

#echo $results_tomorrow->description;

$moon = $results->moon_phase;
$condition_slug = $results->condition_slug;

$req_monn = $moon;
$req_condition_slug = $condition_description;

$picture_monn = "https://assets.hgbrasil.com/weather/icons/moon/$moon.png";
$picture_condition_slug = "https://assets.hgbrasil.com/weather/icons/conditions/$condition_slug.svg";

//print_r($results)

?>