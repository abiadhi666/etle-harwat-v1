<?php

use App\Http\Controllers\CameraDailyController;
use App\Http\Controllers\HarwatDailyController;
use App\Models\HarwatDaily;
use App\Models\Titik;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});


Route::get('/harwat-daily', [CameraDailyController::class, 'index']);
Route::get('harwat-daily/{cameraDaily:slug}', [CameraDailyController::class, 'show']);

Route::get('/titiks', function(){
    return view('titiks', [
        'title' => 'Titik Camera',
        'titiks' => Titik::all(),
    ]);
});

Route::get('/titiks/{titik:slug}', function(Titik $titik){
    return view('titik', [
        'title' => $titik->name,
        'camera' => $titik->camera,
        'titik' => $titik->name
    ]);
});