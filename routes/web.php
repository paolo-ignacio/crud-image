<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\WeatherController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('weather', [WeatherController::class, 'getWeather']);
Route::get('api', [ApiController::class, 'getAPI']);
Route::get('/weather-multiple', [WeatherController::class, 'showThreeCitiesWeather']);
Route::get('/cat-fact', [ApiController::class, 'getCatFact']);