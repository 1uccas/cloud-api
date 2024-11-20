<?php 
/*
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
*/
?>

<?php 

class API{
	//Criação de variáveis.

	private $apiData; // <-- private pois somente iremos usar dentro da classe

	public $date;
	public $hour_time;
	public $condition_description;
	public $currently;
	public $humidity;
	public $city;
	public $cloudiness;
	public $rain;
	public $windSpeed;
	public $windDirection;
	public $windCardinal;
	public $sunrise;
	public $sunset;
	public $moon;
	public $condition_slug;
	public $req_monn;
	public $req_condition_slug;
	public $picture_monn;
	public $picture_condition_slug;

	public function __construct($apiData){
		$this->apiData = $apiData; // <-- recebe dados da api e passa para essa variavel
		$this->loadWeatherData();
	}

	private function loadWeatherData(){
		//Colocando dados ás variaveis criadas

		$results = $this->apiData->results;

		$this->date = $results->date;
		$this->hourTime = $results->time;
        $this->conditionDescription = $results->description;
        $this->currently = $results->currently;
        $this->humidity = $results->humidity;
        $this->city = $results->city;
        $this->cloudiness = $results->cloudiness;
        $this->rain = $results->rain;
        $this->windSpeed = $results->wind_speedy;
        $this->windDirection = $results->wind_direction;
        $this->windCardinal = $results->wind_cardinal;
        $this->sunrise = $results->sunrise;
        $this->sunset = $results->sunset;

        $this->moon = $results->moon_phase;
        $this->condition_slug = $results->condition_slug;

        $this->picture_monn = "https://assets.hgbrasil.com/weather/icons/moon/{$this->moon}.png";
        $this->picture_condition_slug = "https://assets.hgbrasil.com/weather/icons/conditions/{$this->condition_slug}.svg";
	}

	public function getDate()
	{
	    return $this->date;
	}

	public function getHourTime()
	{
	    return $this->hourTime;
	}

	public function getConditionDescription()
	{
	    return $this->conditionDescription;
	}

	public function getCurrently()
	{
	    return $this->currently;
	}

	public function getHumidity()
	{
	    return $this->humidity;
	}

	public function getCity()
	{
	    return $this->city;
	}

	public function getCloudiness(){
		return $this->cloudiness;
	}

	public function getRain()
	{
	    return $this->rain;
	}

	public function getWindSpeed()
	{
	    return $this->windSpeed;
	}

	public function getWindDirection()
	{
	    return $this->windDirection;
	}

	public function getWindCardinal()
	{
	    return $this->windCardinal;
	}

	public function getSunrise()
	{
	    return $this->sunrise;
	}

	public function getSunset()
	{
	    return $this->sunset;
	}

	public function getMoon()
	{
	    return $this->moon;
	}

	public function getCondition_slug()
	{
	    return $this->condition_slug;
	}

	public function getPicture_monn()
	{
	    return $this->picture_monn;
	}

	public function getPicture_condition_slug()
	{
	    return $this->picture_condition_slug;
	}
}

?>