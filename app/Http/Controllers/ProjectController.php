<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 10/04/18
 * Time: 12:33
 */

namespace App\Http\Controllers;


class ProjectController extends Controller
{
    public function projects(){

        return view('front.projects.projects');

    }
}