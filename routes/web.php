<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//centros
route::get('training_center/list',[TrainingCenterController::class,'index'])->name('centros.index');
route::get('training_center/create',[TrainingCenterController::class,'create'])->name('centros.create');
route::get('training_center/{id}',[TrainingCenterController::class,'show'])->name('centros.show');
route::post('training_center/store',[TrainingCenterController::class,'store'])->name('centros.store');
route::get('training_center/{id}/edit',[TrainingCenterController::class,'edit'])->name('centros.edit');
route::put('training_center/{id}',[TrainingCenterController::class,'update'])->name('centros.update');
route::delete('training_center/{id}',[TrainingCenterController::class,'destroy'])->name('centros.destroy');
//areas
route::get('areas/list',[AreaController::class,'index'])->name('areas.index');
route::get('areas/create',[AreaController::class,'create'])->name('areas.create');
route::post('areas/store',[AreaController::class,'store'])->name('areas.store');
route::get('areas/{id}',[AreaController::class,'show'])->name('areas.show');
route::get('areas/{id}/edit',[AreaController::class,'edit'])->name('areas.edit');
route::put('areas/{id}',[AreaController::class,'update'])->name('areas.update');
route::delete('areas/{id}',[AreaController::class,'destroy'])->name('areas.destroy');
//ambientes
route::get('environment/list',[EnvironmentController::class,'index'])->name('ambientes.index');
Route::get('environment/create', [EnvironmentController::class, 'create'])->name('ambientes.create');
Route::post('environment/store', [EnvironmentController::class, 'store'])->name('ambientes.store');
Route::get('environment/{id}', [EnvironmentController::class, 'show'])->name('ambientes.show');
Route::get('environment/{id}/edit', [EnvironmentController::class, 'edit'])->name('ambientes.edit'); 
Route::put('environment/{id}', [EnvironmentController::class, 'update'])->name('ambientes.update');
Route::delete('environment/{id}', [EnvironmentController::class, 'destroy'])->name('ambientes.destroy'); 
//computadores
route::get('computer/list',[ComputerController::class,'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{id}', [ComputerController::class, 'show'])->name('computer.show');
Route::get('computer/{id}/edit', [ComputerController::class, 'edit'])->name('computer.edit'); 
Route::put('computer/{id}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computer/{id}', [ComputerController::class, 'destroy'])->name('computer.destroy');
//ofertas
route::get('offer/list',[OfferController::class,'index'])->name('oferta.index');
Route::get('offer/create', [OfferController::class, 'create'])->name('oferta.create');
Route::post('offer/store', [OfferController::class, 'store'])->name('oferta.store');
Route::get('offer/{id}', [OfferController::class, 'show'])->name('oferta.show');
Route::get('offer/{id}/edit', [OfferController::class, 'edit'])->name('oferta.edit'); 
Route::put('offer/{id}', [OfferController::class, 'update'])->name('oferta.update');
Route::delete('offer/{id}', [OfferController::class, 'destroy'])->name('oferta.destroy');
//instructor
route::get('teacher/list',[TeacherController::class,'index'])->name('profesor.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('profesor.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('profesor.store');
Route::get('teacher/{id}', [TeacherController::class, 'show'])->name('profesor.show');
Route::get('teacher/{id}/edit', [TeacherController::class, 'edit'])->name('profesor.edit'); 
Route::put('teacher/{id}', [TeacherController::class, 'update'])->name('profesor.update');
Route::delete('teacher/{id}', [TeacherController::class, 'destroy'])->name('profesor.destroy');
//cursos
route::get('course/list',[CourseController::class,'index'])->name('cursos.index');
Route::get('course/create', [CourseController::class, 'create'])->name('cursos.create');
Route::post('course/store', [CourseController::class, 'store'])->name('cursos.store');
Route::get('course/{id}', [CourseController::class, 'show'])->name('cursos.show');
Route::get('course/{id}/edit', [CourseController::class, 'edit'])->name('cursos.edit'); 
Route::put('course/{id}', [CourseController::class, 'update'])->name('cursos.update');
Route::delete('course/{id}', [CourseController::class, 'destroy'])->name('cursos.destroy');
//programa
route::get('program/list',[ProgramController::class,'index'])->name('program.index');
Route::get('program/create', [ProgramController::class, 'create'])->name('program.create');
Route::post('program/store', [ProgramController::class, 'store'])->name('program.store');
Route::get('program/{id}', [ProgramController::class, 'show'])->name('program.show');
Route::get('program/{id}/edit', [ProgramController::class, 'edit'])->name('program.edit'); 
Route::put('program/{id}', [ProgramController::class, 'update'])->name('program.update');
Route::delete('program/{id}', [ProgramController::class, 'destroy'])->name('program.destroy');