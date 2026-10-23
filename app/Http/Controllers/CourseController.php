<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CourseController extends Controller
{
    private function fecthDataFromApi($url){
        $response = Http::get($url);
        return $response->json();
    }
    public function index(){
        $url = env('URL_SERVE_API');
        $courses = $this->fecthDataFromApi($url.'/course');
        return view('course.index',compact('courses'));
    }
    public function create()
    {
        $url = env('URL_SERVE_API');
        $environments = Http::get($url .'/environment')->json();
        $programs = Http::get($url .'/program')->json();
        return view('course.create',compact('environments','programs'));
    }
    public function store(Request $request)
    {
        $url = env('URL_SERVE_API');
        Http::post($url . '/course', $request->all());
        return redirect()->route('course.index');
    }
    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $course = $this->fecthDataFromApi($url . '/course/' . $id);
        return view('course.show', compact('course'));
    }
    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $course = $this->fecthDataFromApi($url . '/course/' . $id);
        $programs = Http::get($url .'/program')->json();
        $environments = Http::get($url .'/environment')->json();
        return view('course.edit', compact('course','programs','environments'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVE_API');
        Http::put($url . '/course' . $id, $request->all());
        return redirect()->route('course.index');
    }
    public function destroy($id)
    {
        $url = env('URL_SERVE_API');
        Http::delete($url . '/course/' . $id);
        return redirect()->route('course.index');
    }
}
