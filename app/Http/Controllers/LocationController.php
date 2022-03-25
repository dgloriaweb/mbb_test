<?php

namespace App\Http\Controllers;

use App\Http\Services\weatherService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //using the location, return the 16 data from the api
        // $location = $_POST["location"];
        // return $location;
        return csrf_token();
        //
    }


    /**
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Request
     */
    // public function show(String $location)
    public function show()
    {
        $weatherService = new weatherService();
        $weatherData = $weatherService->connectToApi();
        return $weatherData;
    }
}
