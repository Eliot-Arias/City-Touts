<?php

use App\Http\Controllers\imagesController;
use App\Http\Controllers\sliderController;
use App\Models\Images;
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
    return view('index');
});

//vista oculta de las imagenes


//vistas de la barra de navegacion



Route::get('/inicio', [imagesController::class , 'index'], )->name('inicio');
// Route::get('/inicio', [sliderController::class , 'index'], )->name('inicio');


Route::get('/inicio/galeria', [imagesController::class , 'create'])->name('crear');
Route::post('/inicio', [imagesController::class, 'store'])->name('guardar');

Route::get('/inicio/slider', [sliderController::class , 'create'])->name('crear-slider');
Route::post('/', [sliderController::class, 'store'])->name('guardar-slider');


Route::get('/paquetes', [imagesController::class, 'paquetes'])->name('paquetes');
Route::view('/tips', 'menus.tips')->name('tips');
Route::view('/contacto', 'menus.contacto')->name('contacto');
Route::view('/nosotros', 'menus.nosotros')->name('nosotros');

