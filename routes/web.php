<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocenteController;
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

/**Route::get('/', function () {
    return view('welcome');
});**/
/**Crea la ruta para HomeController, Donde
Get-> responde a los cambios en la URL
HomeController->controlador
Class->requiere una clase**/

//ruta para mostrar la pagina principal del proyecto
Route::get('/',[HomeController::class,'index'])-> name('index');

//ruta para mostrar la pagina de docentes
Route::get('docentes',[DocenteController::class,'index'])-> name('index');


