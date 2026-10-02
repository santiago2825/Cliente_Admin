<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('training_center/list',[TrainingCenterController::class,'index'])->name('centros.index');
route::get('areas/list',[AreaController::class,'index'])->name('areas.index');
route::get('environment/list',[EnvironmentController::class,'index'])->name('ambientes.index');