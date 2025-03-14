<?php


use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PlanesController;


Auth::routes();


Route::get('Dashboard', function () {})->middleware(Admin::class, 'auth');
Route::get("/flights",  [FlightController::class, "index"])->name("index");
Route::get('/planes', [PlanesController::class, 'index'])->name('index');



