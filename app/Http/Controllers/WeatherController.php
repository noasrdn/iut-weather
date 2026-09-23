<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
$response = Http::get('https://api.openweathermap.org/data/2.5/weather?lat=44.34&lon=10.99&appid=80a4c8745f514f2fb5d23bff68a027e9');
class WeatherController extends Controller
{
    return $response;
}
