<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VistasEstaticasController extends Controller
{
    public function about(){

        return view('client.estaticas.about');
    }
    
    public function autohelp(){

        return view('client.estaticas.autohelp');
    }

    
}
