<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //metodo para invocar la vista
    public function __invoke()
    {
        return view('home');
    }
}
