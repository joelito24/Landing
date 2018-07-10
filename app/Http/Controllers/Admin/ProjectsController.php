<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 11/04/18
 * Time: 14:56
 */

namespace App\Http\Controllers\Admin;
use App\Models\Projects;
use App;


class ProjectsController extends BaseController
{
    protected $resourceName = 'projects';
    protected $repositoryName = Projects::class;

    protected $pathFile = 'files/projects/';
    protected $filesDimensions = [
        'image1' => ['w' => 1900, 'h' => 1608],
        'image2' => ['w' => 700, 'h' => 700],
        'image3' => ['w' => 1340, 'h' => 580],
        'image4' => ['w' => 1340, 'h' => 580],
        'image5' => ['w' => 1340, 'h' => 580],
        'thumb'  => ['w' => 150, 'h' => 150],
    ];
    public function index()
    {
        $fluxesHead = [
            'id' => 'ID',
            'title' => 'Título',
            'nameCategory' => 'Categoría',
            'description_short' => 'Preguntas',
        ];

        return view('admin.datatable', [
            'data' => Projects::all(),
            'title' => 'Proyectos',
            'pageTitle' => 'Listado de proyectos',
            'header' => $fluxesHead
        ]);
    }
}