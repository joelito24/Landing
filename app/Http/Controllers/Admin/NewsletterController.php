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
    protected $resourceName = 'contacts';
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
}