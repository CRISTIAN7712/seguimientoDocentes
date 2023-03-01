<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**Se crea una funcion estatica que da respuesta a los 
 * requerimiento de la ruta */
class HomeController extends Controller
{
    public function index()
    {
        //$docentes = Docente::all();
        return view('index');
    }
}
