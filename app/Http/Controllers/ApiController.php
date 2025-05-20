<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //

    public function getAPI(Request $request){

    }

    public function getCatFact()
{
    $response = Http::get("https://catfact.ninja/fact");

    if ($response->successful()) {
        $fact = $response['fact'];
        return view('catfact', ['fact' => $fact]);
    } else {
        return view('catfact', ['fact' => 'Unable to fetch cat fact at the moment.']);
    }
}
}
