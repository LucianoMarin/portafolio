<?php

use App\Http\Controllers\PosteosController;
use Illuminate\Support\Facades\Route;
use App\Models\Posteos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('principal.plantilla');
});
*/





Route::get('/', function(){

return view('principal.inicio');

});

Route::post('/',[PosteosController::class, 'store'])->name('posteo');



Route::get('acerca', function(){

    return view('about.acerca');
    
    });
    
    

Route::get('proyecto',function(){
return view('proyectos.proyectos');
});