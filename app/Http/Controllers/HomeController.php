<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()//Esta funcion se utiliza cuando el controlador tiene 1 metodo
    {
        return "Primer controlador en laravel";
    }
}
