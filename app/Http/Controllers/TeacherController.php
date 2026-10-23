<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TeacherController extends Controller
{
    private function fecthDataFromApi($url){
        $response = Http::get($url);
        return $response->json();
    }
    public function index(){
        $url = env('URL_SERVE_API');
        $teachers = $this->fecthDataFromApi($url.'/teacher');
        return view('instructor.index',compact('teachers'));
    }
    public function create(){
        return view ('instructor.create');
    }
    public function store(Request $request)
    {
        $url = env('URL_SERVE_API');
        Http::post($url . '/teacher', $request->all());
        return redirect()->route('profesor.index');
    }
    public function show($id)
    {
        $url = env('URL_SERVE_API');
        $teacher = $this->fecthDataFromApi($url.'/teacher/'. $id);
        return view('instructor.show', compact('teacher'));
    }
    public function edit($id)
    {
        $url = env('URL_SERVE_API');
        $teacher = $this->fecthDataFromApi($url . '/teacher/' . $id);
        return view('instructor.edit', compact('teacher'));
    }
    public function update(Request $request, $id)
    {
        $url = env('URL_SERVE_API');
        Http::put($url . '/teacher/' . $id, $request->all());
        return redirect()->route('profesor.index');
    }
    public function destroy($id)
    {
        $url = env('URL_SERVE_API');
        Http::delete($url . '/teacher/' . $id);
        return redirect()->route('profesor.index');
    }
}
