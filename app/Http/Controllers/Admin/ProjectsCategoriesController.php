<?php

namespace App\Http\Controllers\Admin;
use App\Models\Projects;
use App;
use App\Models\ProjectsCategory;

class ProjectsCategoriesController extends BaseController
{
    protected $resourceName = 'projects_category';
    protected $repositoryName = ProjectsCategory::class;
    public function index()
    {
        $fluxesHead = [
            'id' => 'ID',
            'name' => 'Categoría',
        ];

        return view('admin.datatable', [
            'data' => ProjectsCategory::all(),
            'title' => 'Categorías de los proyectos',
            'pageTitle' => 'Listado de categorías de los proyectos',
            'header' => $fluxesHead
        ]);
    }
}