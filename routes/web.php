<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', HomeController::class);
Route::resource('personas', PersonaController::class);
Route::controller(PersonaController::class)->group(function (){
    Route::get('personas/{persona}/{categoria?}', 'personas.filtercategory')->name('personas.filtrar');
});
