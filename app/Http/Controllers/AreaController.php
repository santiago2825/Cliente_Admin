<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AreaController extends Controller
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
    public function create(){
        return view ('areas.create');
    }
    public function store(Request $request)
    {
        $url = env('URL_SERVE_API');
        Http::post($url . '/area', $request->all());
        return redirect()->route('areas.index');
    }
    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $area = $this->fecthDataFromApi($url.'/area/'. $id);
        return view('areas.show', compact('area'));
    }
    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $area = $this->fecthDataFromApi($url . '/area/' . $id);
        return view('areas.edit', compact('area'));
    }
    public function update(Request $request, $id)
    {
        $url = env('URL_SERVE_API');
        Http::put($url . '/area/' . $id, $request->all());
        return redirect()->route('areas.index');
    }
    public function destroy($id)
    {
        $url = env('URL_SERVE_API');
        Http::delete($url . '/area/' . $id);
        return redirect()->route('areas.index');
    }
}
