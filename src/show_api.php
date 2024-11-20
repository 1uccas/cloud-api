<?php 
 	require 'take_data_api.php';
	require 'vendor/autoload.php';
	$dotenv = Dotenv\Dotenv::createImmutable('C:/laragon/www/cloud-api');
	$dotenv->load();

	$API_KEY = getenv('API_KEY');
	$url = "https://api.hgbrasil.com/weather?woeid=455830?key=".$API_KEY;
	$api = json_decode(file_get_contents($url));

	$cloud_api = new API($api);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' type='text/css' href='utils/css/index.css'>
	<title>Cloud-API</title>
</head>
<body>
	<main class='main_master'>
		<div class='container_information_city'>
			<label class='label_data'>
				<?php echo "{$cloud_api->getDate()} - {$cloud_api->getHourTime()} - {$cloud_api->getCurrently()}"; ?>
					
			</label>
			<label class='label_city_information'>
				<?php echo "{$cloud_api->getCity()} - {$cloud_api->getConditionDescription()}"; ?>		
			</label>
		</div>

		<div class='container_cloud_information_master'>
			<label class='label_humity'>
				Úmidade: <?php echo "{$cloud_api->getHumidity()}"; ?>		
			</label>
			<label class='label_cloudiness'>
				Nebulosidade: <?php echo "{$cloud_api->getCloudiness()}"; ?>
			</label>
			<label class='label_rain'>
				Chuva: <?php echo "{$cloud_api->getRain()}"; ?>
			</label>
			<label class='label_wind_speedy'>
				Velocidade do Vento: <?php echo "{$cloud_api->getWindSpeed()}"; ?>
			</label>
			<label class='label_wind_direction'>
				Direção do Vento: <?php echo "{$cloud_api->getWindDirection()} - {$cloud_api->getWindCardinal()}"; ?>
			</label>
			<label class='label_sunrise'>
				Nascer do Sol: <?php echo $cloud_api->getSunrise(); ?>
			</label>
			<label class='label_sunset'>
				Pôr do Sol: <?php echo $cloud_api->getSunset(); ?>
			</label>
			<label class='label_picture_monn'>
				Fase da Lua:
				<img class='img_picture_moon' src='<?php echo "{$cloud_api->getPicture_monn()}"; ?>' alt='Fase da Lua'>
			</label>
			<label class='label_picture_condition_slug'>
				Condição de Tempo:
				<img class='img_picture_condition_slug' src='<?php echo "{$cloud_api->getPicture_condition_slug()}"; ?>' alt='Condição do Tempo'>
			</label>
		</div>
	</main>

</body>
</html>