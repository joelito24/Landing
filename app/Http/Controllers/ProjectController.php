<?php


namespace App\Http\Controllers;


use App\Models\Projects;
use App\Models\ProjectsCategory;

class ProjectController extends Controller
{
    public function projects(Projects $projectsRepository, ProjectsCategory $categoryRepository){

        $categories = $categoryRepository->findAllActive();
        $projects = $projectsRepository->findAllActive();
        return view('front.projects.projects',[
            'categories' => $categories,
            'projects' => $projects
        ]);

    }

    public function detail($slug, Projects $projectsRepository){
        $project = $projectsRepository->findBySlug($slug);
//        print_r($project);die();
        return view('front.projects.detail',[
            'project' => $project,
        ]);
    }
}