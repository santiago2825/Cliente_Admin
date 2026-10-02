<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnvironmentController extends Controller
{
    private function fecthDataFromApi($url){
        $response = Http::get($url);
        return $response->json();
    }
    public function index(){
        $url = env('URL_SERVE_API');
        $environments = $this->fecthDataFromApi($url.'/environment');
        return view('ambientes.index',compact('environments'));
    }
}
