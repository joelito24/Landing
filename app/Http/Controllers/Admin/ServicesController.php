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
        ];

        return view('admin.datatable', [
            'data' => Services::all(),
            'title' => 'Servicios',
            'pageTitle' => 'Listado de servicios',
            'header' => $fluxesHead
        ]);
    }
}