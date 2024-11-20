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


	//Adicionando getters para ler o conteudo das variaveis criadas!!!
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