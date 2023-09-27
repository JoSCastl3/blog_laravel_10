<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Los metodos incoke son cuando tiene solo una ruta
    public function __invoke(){
        return view("home");
    }
}
