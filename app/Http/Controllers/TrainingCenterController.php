<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrainingCenterController extends Controller
{
    private function fecthDataFromApi($url){
        $response = Http::get($url);
        return $response->json();
    }
    public function index(){
        $url = env('URL_SERVE_API');
        $trainingcenters = $this->fecthDataFromApi($url.'/training_center');
        return view('centros.index',compact('trainingcenters'));
    }
}
