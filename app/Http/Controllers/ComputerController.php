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
        return view('computadores.index',compact('computers'));
    }
    public function create()
    {
        $url = env('URL_SERVE_API');
        $environments = Http::get($url .'/environment')->json();
        return view('computadores.create',compact('environments'));
    }
    public function store(Request $request)
    {
        $url = env('URL_SERVE_API');
        $file = $request->file('imagen');
        $response = Http::attach(
            'imagen',
            file_get_contents($file->getRealPath()),
            $file->getClientOriginalName()
        )->post($url . '/computer', [
            'number' => $request->number,
            'brand' => $request->brand,
            'environment_id' => $request->environment_id,
        ]);

        return redirect()->route('computer.index');
    }
    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $computer = $this->fecthDataFromApi($url . '/computer/' . $id);
        return view('computadores.show', compact('computer'));
    }
    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $computer = $this->fecthDataFromApi($url . '/computer/' . $id);
        $environments = Http::get($url .'/environment')->json();
        return view('computadores.edit', compact('computer','environments'));
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
