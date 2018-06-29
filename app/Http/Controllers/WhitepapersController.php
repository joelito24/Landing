<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 10/04/18
 * Time: 12:37
 */

namespace App\Http\Controllers;


class WhitepapersController extends Controller
{
    public function whitepapers(){

        return view('front.whitepapers.whitepapers');

    }
}