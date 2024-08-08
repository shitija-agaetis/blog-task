<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = env('WEATHER_API_KEY');
        $this->baseUrl = env('WEATHER_BASE_URL');
    }


    
    public function getCurrentWeather($name)
    {
        $response = Http::timeout(30)->get("{$this->baseUrl}/current.json", [
            'key' => $this->apiKey,
            'q' => $name
        ]);

        return $response->json();
    }
}
