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

    protected $pathFile = 'files/whitepapers/';
    protected $filesDimensions = [
        'image'  => ['w' => 550, 'h' => 300],
    ];
    public function index()
    {
        $fluxesHead = [
            'id' => 'ID',
            'title' => 'Título',
//            'description' => 'Descripción',
            'data_file' => 'Ficheros',
            'order' => 'Orden'
        ];

        return view('admin.datatable', [
            'data' => Whitepapers::all(),
            'title' => 'White papers',
            'pageTitle' => 'Listado de white papers',
            'header' => $fluxesHead
        ]);
    }

    public function order()
    {
        App::setLocale('es');
        $fluxesHead = [
            'title' => 'Título',
        ];

        $repo = App::make($this->repositoryName);
        $data = $repo->findAllActive();

        return view('admin.order', [
            'data' => $data,
            'pageTitle' => 'Orden de White Papers',
            'title' => 'White papers',
            'header' => $fluxesHead,
//            'filter' => all_projects_categories(),
            'filter_id' => false,
            'repository' => $this->resourceName
        ]);
    }
}