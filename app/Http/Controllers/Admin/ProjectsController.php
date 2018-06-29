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
    public function index()
    {
        $fluxesHead = [
            'id' => 'ID',
            'title' => 'Título',
            'category' => 'Categoría',
            'description' => 'Preguntas',
        ];

        return view('admin.datatable', [
            'data' => Projects::all(),
            'title' => 'Proyectos',
            'pageTitle' => 'Listado de proyectos',
            'header' => $fluxesHead
        ]);
    }
}