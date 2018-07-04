<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 10/04/18
 * Time: 12:37
 */

namespace App\Http\Controllers\Admin;

use App\Models\Newsletter;
use App;
use Session;




class NewsletterController extends BaseController
{
    protected $resourceName = 'newsletter';
    protected $repositoryName = Newsletter::class;
    public function index()
    {
        App::setLocale('es');
        $fluxesHead = [
            'id' => 'ID',
            'email' => 'Email',
            'name' => 'Nombre',
            'created_at' => 'Fecha de alta',
        ];

        return view('admin.datatable', [
            'data' => Newsletter::all(),
            'pageTitle' => 'Listado de Newsletter',
            'header' => $fluxesHead
        ]);
    }
    public function get_fields(){
        $consult[1] = 1;
        $consult[2] = 2;
        $consult[3] = 3;
        $consult[4] = 4;
        $consult[5] = 5;
        $consult[6] = 6;
        return $consult;
    }
}