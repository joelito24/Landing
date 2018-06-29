<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 10/04/18
 * Time: 13:25
 */

namespace App\Http\Controllers;


class SpecializationController extends Controller
{

    public function specialization1(){

        return view('front.specializations.ecommerce');
    }

    public function specialization2(){

        return view('front.specializations.companas');
    }

    public function specialization3(){

        return view('front.specializations.emarketing');
    }

    public function specialization4(){

        return view('front.specializations.transformation');
    }

}