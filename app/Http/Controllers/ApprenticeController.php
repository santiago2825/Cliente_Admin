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
        return view('apprentice.index',compact('apprentices'));
    }
    public function create()
    {
        $url = env('URL_SERVE_API');
        $courses = Http::get($url .'/course')->json();
        return view('apprentice.create',compact('courses'));
    }
    public function store(Request $request)
    {
        $url = env('URL_SERVE_API');
        Http::post($url . '/apprentice', $request->all());
        return redirect()->route('apprentice.index');
    }
    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $apprentice = $this->fecthDataFromApi($url . '/apprentice/' . $id);
        return view('apprentice.show', compact('apprentice'));
    }
    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $apprentice = $this->fecthDataFromApi($url . '/apprentice/' . $id);
        $courses = Http::get($url .'/course')->json();
        return view('apprentice.edit', compact('apprentice','courses'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVE_API');
        Http::put($url . '/apprentice/' . $id, $request->all());
        return redirect()->route('apprentice.index');
    }
    public function destroy($id)
    {
        $url = env('URL_SERVE_API');
        Http::delete($url . '/apprentice/' . $id);
        return redirect()->route('apprentice.index');
    }
}
