<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApprenticeController extends Controller
{
    private function fecthDataFromApi($url){
        $response = Http::get($url);
        return $response->json();
    }
    public function index(){
        $url = env('URL_SERVE_API');
        $apprentices = $this->fecthDataFromApi($url.'/apprentice');
        return view('aprendiz.index',compact('apprentices'));
    }
    public function create()
    {
        $url = env('URL_SERVE_API');
        $course = Http::get($url .'/course')->json();
        return view('aprendiz.create',compact('course'));
    }
    public function store(Request $request)
    {
        $url = env('URL_SERVE_API');
        Http::post($url . '/apprentice', $request->all());
        return redirect()->route('aprendiz.index');
    }
    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $course = $this->fecthDataFromApi($url . '/course/' . $id);
        return view('aprendiz.show', compact('course'));
    }
    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $apprentice = $this->fecthDataFromApi($url . '/aprentice/' . $id);
        $course = Http::get($url .'/course')->json();
        return view('aprendiz.edit', compact('apprentice','course'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVE_API');
        Http::put($url . '/apprentice/' . $id, $request->all());
        return redirect()->route('aprendiz.index');
    }
    public function destroy($id)
    {
        $url = env('URL_SERVE_API');
        Http::delete($url . '/apprentice/' . $id);
        return redirect()->route('aprendiz.index');
    }
}
