<?php

namespace App\Http\Controllers\Admin;

use App\Models\Services;
use App;

class ServicesController extends BaseController
{
    protected $resourceName = 'services';
    protected $repositoryName = Services::class;

    const TOTAL_ITEMS_PER_PAGE = 20;

    // IMAGENES
    protected $pathFile = 'files/services/';
    protected $filesDimensions = [
        'image1' => ['w' => 500, 'h' => 500],
        'image2' => ['w' => 2000, 'h' => 520],
        'thumb' => ['w' => 150, 'h' => 150],
    ];

    public function index()
    {
        $fluxesHead = [
            'id' => 'ID',
            'title' => 'Título',
            'about' => 'Preguntas',
            'order' => 'Orden',
        ];

        return view('admin.datatable', [
            'data' => Services::all(),
            'title' => 'Servicios',
            'pageTitle' => 'Listado de servicios',
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
        $data = $repo->getAllActive();

        return view('admin.order', [
            'data' => $data,
            'pageTitle' => 'Orden de Servicio',
            'title' => 'Servicios',
            'header' => $fluxesHead,
//            'filter' => all_projects_categories(),
            'filter_id' => false,
            'repository' => $this->resourceName
        ]);
    }
}