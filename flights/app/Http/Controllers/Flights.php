<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Flights extends Controller
{
    //

    function all()
    {
        return Http::get('http://prova.123milhas.net/api/flights')->body();
    }
}
