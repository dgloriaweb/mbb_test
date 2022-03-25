<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class weatherService
{

    public function getWeather($location)
    {
        # code...
    }
    public function connectToApi()
    {
        $url="http://dataservice.accuweather.com/locations/v1/topcities/150?apikey=";
        $key="xLiYERl0jqmYQvDagbL5owwrtoZT8h8L";
        $response = Http::get($url.$key);
        return $response;
    }
}
