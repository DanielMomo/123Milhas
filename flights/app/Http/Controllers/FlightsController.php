<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FlightsController extends Controller
{
    //

    function list()
    {
        return Http::get('http://prova.123milhas.net/api/flights')->json();
    }

    function group()
    {
        $flights = collect($this->list());

        foreach($flights as $flight){
            var_dump($flight);
        }

        return $flights->groupBy('fare');
    }

    function order()
    {
        return Http::get('http://prova.123milhas.net/api/flights')->json();
    }

}
