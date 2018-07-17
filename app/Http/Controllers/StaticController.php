<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use Illuminate\Contracts\View\View;

class StaticController extends Controller
{
    public function aviso(){

        return view('front.static.aviso');
    }

    public function politica(){

        return view('front.static.politica');
    }

    public function generals(){
        return view('front.static.generals');
    }

    public function agency(){

        return view('front.static.agency');

    }

}