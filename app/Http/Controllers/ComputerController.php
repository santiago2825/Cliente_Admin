<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ComputerController extends Controller
{
    private function fecthDataFromApi($url){
        $response = Http::get($url);
        return $response->json();
    }
    public function index(){
        $url = env('URL_SERVE_API');
        $areas = $this->fecthDataFromApi($url.'/area');
        return view('areas.index',compact('areas'));
    }
}
