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
        return view('cursos.index',compact('courses'));
    }
    public function create()
    {
        $url = env('URL_SERVE_API');
        $environment = Http::get($url .'/environment')->json();
        $program = Http::get($url .'/program')->json();
        return view('cursos.create',compact('environment','program'));
    }
    public function store(Request $request)
    {
        $url = env('URL_SERVE_API');
        Http::post($url . '/course', $request->all());
        return redirect()->route('cursos.index');
    }
    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $course = $this->fecthDataFromApi($url . '/course/' . $id);
        return view('cursos.show', compact('course'));
    }
    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $course = $this->fecthDataFromApi($url . '/course/' . $id);
        $program = Http::get($url .'/program')->json();
        $environment = Http::get($url .'/environmentt')->json();
        return view('cursos.edit', compact('course','program','environment'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVE_API');
        Http::put($url . '/course' . $id, $request->all());
        return redirect()->route('cursos.index');
    }
    public function destroy($id)
    {
        $url = env('URL_SERVE_API');
        Http::delete($url . '/courset/' . $id);
        return redirect()->route('cursos.index');
    }
}
