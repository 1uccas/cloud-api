<?php 

$url = "https://api.hgbrasil.com/weather";
$api = json_decode(file_get_contents($url));

var_dump($api);

?>