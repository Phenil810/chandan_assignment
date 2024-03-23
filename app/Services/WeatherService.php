<?php


namespace App\Services;

use GuzzleHttp\Client;

class WeatherService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getWeatherForecast($location, $date)
    {
        $apiKey = env('WEATHER_API_KEY');
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$location&appid=$apiKey";

        $response = $this->client->get($url);
        return json_decode($response->getBody(), true);
    }
}

