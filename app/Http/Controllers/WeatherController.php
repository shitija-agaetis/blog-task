<?php

namespace App\Http\Controllers;

use App\Models\Category; 
use App\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function readmore($id)
    {
        $category = Category::findOrFail($id);

        $weather = $this->weatherService->getCurrentWeather($category->name);

        return view('category.readmore', [
            'category' => $category,
            'weather' => $weather]);
    }
}
