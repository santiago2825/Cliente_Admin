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
    public function create(){
        return view ('centros.create');
    }
    public function store(Request $request)
    {
    $url = env('URL_SERVE_API');
    $file = $request->file('imagen');
    $response = Http::attach(
        'imagen', 
        file_get_contents($file->getRealPath()), 
        $file->getClientOriginalName()
    )->post($url . '/training_center', [
        'name' => $request->name,
        'location' => $request->location
    ]);
    return redirect()->route('centros.index',compact('response'));
    }
    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $centro = $this->fecthDataFromApi($url.'/training_center/'. $id);
        return view('centros.show', compact('centro'));
    }
    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $centro = $this->fecthDataFromApi($url . '/training_center/' . $id);
        return view('centros.edit', compact('centro'));
    }
    public function update(Request $request, $id)
    {
        $url = env('URL_SERVE_API');
        Http::put($url . '/training_center/' . $id, $request->all());
        return redirect()->route('centros.index');
    }
    public function destroy($id)
    {
        $url = env('URL_SERVE_API');
        Http::delete($url . '/training_center/' . $id);
        return redirect()->route('centros.index');
    }
}
