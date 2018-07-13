<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 11/04/18
 * Time: 15:05
 */

namespace App\Http\Controllers\Admin;
use App\Models\Whitepapers;
use App;

class WhitepapersController extends BaseController
{
    protected $resourceName = 'whitepapers';
    protected $repositoryName = Whitepapers::class;

    protected $pathFile = 'files/documents/';

    public function index()
    {
        $fluxesHead = [
            'id' => 'ID',
            'title' => 'Título',
            'description' => 'Descripción',
        ];

        return view('admin.datatable', [
            'data' => Whitepapers::all(),
            'title' => 'White papers',
            'pageTitle' => 'Listado de white papers',
            'header' => $fluxesHead
        ]);
    }
}