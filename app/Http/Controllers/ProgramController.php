<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProgramController extends Controller
{
    private function fetchDataFromApi( $url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()
    {
        $url = env('URL_SERVE_API');
        $programs = $this->fetchDataFromApi($url . '/program');
        return view('program.index', compact('programs'));
    }

    public function create()
    {
        $url = env('URL_SERVE_API');
        $centros = Http::get($url .'/training_center')->json();
        $offers = Http::get($url .'/offer')->json();
        return view('program.create',compact('centros','offers'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVE_API');
        Http::post($url . '/program', $request->all());
        return redirect()->route('program.index');
    }

    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $program = $this->fetchDataFromApi($url . '/program/' . $id);
        return view('program.show', compact('program'));
    }

    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $program = $this->fetchDataFromApi($url . '/program/' . $id);
        $centros = Http::get($url .'/training_center')->json();
        $offers = Http::get($url .'/offer')->json();
        return view('program.edit', compact('program','centros','offers'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVE_API');
        Http::put($url . '/program/' . $id, $request->all());
        return redirect()->route('program.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVE_API');
        Http::delete($url . '/program/' . $id);
        return redirect()->route('program.index');
    }
}
