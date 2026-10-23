<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\EnvironmentController;
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