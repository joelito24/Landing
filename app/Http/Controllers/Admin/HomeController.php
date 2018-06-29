<?php

namespace App\Http\Controllers\Admin;

class HomeController extends BaseController
{

    public function index()
    {
//        $cant['orders']     = count(\App\Models\Orders::all());

        return view('admin.home', ['cant' => 8]);
//        return view('admin.home');
    }

}
