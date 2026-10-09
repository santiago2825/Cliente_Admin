<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OfferController extends Controller
{
    private function fecthDataFromApi($url){
        $response = Http::get($url);
        return $response->json();
    }
    public function index(){
        $url = env('URL_SERVE_API');
        $offers = $this->fecthDataFromApi($url.'/offer');
        return view('offers.index',compact('offers'));
    }
    public function create(){
        return view ('offers.create');
    }
    public function store(Request $request)
    {
        $url = env('URL_SERVE_API');
        Http::post($url . '/offer', $request->all());
        return redirect()->route('offers.index');
    }
    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $offer = $this->fecthDataFromApi($url.'/offer/'. $id);
        return view('offers.show', compact('offer'));
    }
    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $offer = $this->fecthDataFromApi($url . '/offer/' . $id);
        return view('offers.edit', compact('offer'));
    }
    public function update(Request $request, $id)
    {
        $url = env('URL_SERVE_API');
        Http::put($url . '/offer/' . $id, $request->all());
        return redirect()->route('offers.index');
    }
    public function destroy($id)
    {
        $url = env('URL_SERVE_API');
        Http::delete($url . '/offer/' . $id);
        return redirect()->route('offers.index');
    }
}
