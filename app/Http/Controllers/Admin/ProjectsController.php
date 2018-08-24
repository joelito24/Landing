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
use App\Models\ProjectsRelated;

class ProjectsController extends BaseController
{
    protected $resourceName = 'projects';
    protected $repositoryName = Projects::class;

    //Relaciones multiples
    protected $repositoryRelated = [
        'project_id_related' => ProjectsRelated::class,
    ];
    protected $selfReferenceRelated = 'project_id';

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
            'order' => 'Orden',
        ];

        return view('admin.datatable', [
            'data' => Projects::all(),
            'title' => 'Proyectos',
            'pageTitle' => 'Listado de proyectos',
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
            'pageTitle' => 'Orden de Proyectos',
            'title' => 'Proyectos',
            'header' => $fluxesHead,
//            'filter' => all_projects_categories(),
            'filter_id' => false,
            'repository' => $this->resourceName
        ]);
    }

}