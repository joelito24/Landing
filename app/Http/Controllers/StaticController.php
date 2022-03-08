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

    public function landing_agencia_ecommerce(){
        return view('front.static.landing_agencia_ecommerce');
    }

    public function landing_kit_digital() {
        return view('front.static.landing_kit_digital');
    }

}