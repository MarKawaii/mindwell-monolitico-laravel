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

    public function contactus(){

        return view('client.estaticas.contactus');
    }

    public function mediccenter(){

        return view('client.estaticas.mediccenter');
    }

    public function services(){

        return view('client.estaticas.services');
    }

    public function specialist(){

        return view('client.estaticas.specialist');
    }
}
