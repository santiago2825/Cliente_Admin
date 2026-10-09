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
    public function create()
    {
        $url = env('URL_SERVE_API');
        $centros = Http::get($url .'/training_center')->json();
        return view('ambientes.create',compact('centros'));
    }
    public function store(Request $request)
    {
        $url = env('URL_SERVE_API');
        Http::post($url . '/environment', $request->all());
        return redirect()->route('ambientes.index');
    }
    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $ambiente = $this->fecthDataFromApi($url . '/environment/' . $id);
        return view('ambientes.show', compact('ambiente'));
    }
    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $ambiente = $this->fecthDataFromApi($url . '/environment/' . $id);
        $centros = Http::get($url .'/training_center')->json();
        return view('ambientes.edit', compact('ambiente','centros'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVE_API');
        Http::put($url . '/environment/' . $id, $request->all());
        return redirect()->route('ambientes.index');
    }
    public function destroy($id)
    {
        $url = env('URL_SERVE_API');
        Http::delete($url . '/environment/' . $id);
        return redirect()->route('ambientes.index');
    }

}
