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

echo "
	$date - $hour_time - $currently
	<br>
	$city - $condition_description
	<br>
	<br>
	Úmidade: $humidity%
	<br>
	Nebulosidade: $cloudiness%
	<br>
	Chuva: $rain%
	<br>
	Velocidade do Vento: $wind_speedy
	<br>
	Direção do Vento: $wind_direction - $wind_cardinal
	<br>
	Nascer do Sol: $sunrise
	<br>
	Pôr do Sol: $sunset
	<br>
	Fase da Lua: <img src='$picture_monn'>
	<br>
	Condição de Tempo: <img src='$picture_condition_slug'>
	<br>

";

print_r($results);

?>