<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//centros
route::get('training_center/list',[TrainingCenterController::class,'index'])->name('centros.index');
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