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
        $computers = $this->fecthDataFromApi($url.'/computer');
        return view('computer.index',compact('computers'));
    }
    public function create()
    {
        $url = env('URL_SERVE_API');
        $environment = Http::get($url .'/environment')->json();
        return view('computer.create',compact('environment'));
    }
    public function store(Request $request)
    {
        $url = env('URL_SERVE_API');
        Http::post($url . '/computer', $request->all());
        return redirect()->route('computer.index');
    }
    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $computer = $this->fecthDataFromApi($url . '/computer/' . $id);
        return view('computer.show', compact('computer'));
    }
    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $computer = $this->fecthDataFromApi($url . '/computer/' . $id);
        $environment = Http::get($url .'/environment')->json();
        return view('computer.edit', compact('computer','environment'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVE_API');
        Http::put($url . '/computer/' . $id, $request->all());
        return redirect()->route('computer.index');
    }
    public function destroy($id)
    {
        $url = env('URL_SERVE_API');
        Http::delete($url . '/computer/' . $id);
        return redirect()->route('computer.index');
    }
}
