<?php 
 	require 'src/take_data_api.php';
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
			<label class='label_data'><?php echo "$date - $hour_time - $currently"; ?></label>
			<label class='label_city_information'><?php echo "$city - $condition_description"; ?></label>
		</div>

		<div class='container_cloud_information_master'>
			<label class='label_humity'>
				Úmidade: <?php echo "$humidity%"; ?>		
			</label>
			<label class='label_cloudiness'>
				Nebulosidade: <?php echo "$cloudiness%"; ?>
			</label>
			<label class='label_rain'>
				Chuva: <?php echo "$rain%"; ?>
			</label>
			<label class='label_wind_speedy'>
				Velocidade do Vento: <?php echo $wind_speedy; ?>
			</label>
			<label class='label_wind_direction'>
				Direção do Vento: <?php echo "$wind_direction - $wind_cardinal"; ?>
			</label>
			<label class='label_sunrise'>
				Nascer do Sol: <?php echo $sunrise; ?>
			</label>
			<label class='label_sunset'>
				Pôr do Sol: <?php echo $sunset; ?>
			</label>
			<label class='label_picture_monn'>
				Fase da Lua:
				<img class='img_picture_moon' src='<?php echo $picture_monn; ?>' alt='Fase da Lua'>
			</label>
			<label class='label_picture_condition_slug'>
				Condição de Tempo:
				<img class='img_picture_condition_slug' src='<?php echo $picture_condition_slug; ?>' alt='Condição do Tempo'>
			</label>
		</div>
	</main>

</body>
</html>