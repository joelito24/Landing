<?php

namespace App\Models;

use App\Interfaces\ModelInterface;
use Illuminate\Database\Eloquent\Model;
use App\Models\Projects;


class ProjectsRelated extends Model implements ModelInterface
{
    protected $table = 'projects_related';
    protected $fillable = ['project_id', 'project_id_related'];
    public $timestamps = false;

    //RELACIONES
    public function project()
    {
        return $this->belongsTo(Projects::class, 'project_id', 'id')->first();
    }

    public function projectsRelated()
    {
        return $this->belongsTo(Projects::class, 'project_id_related', 'id')->where('active', 1)->first();
    }

    public function add( $data )
    {
        return $this->create($data);
    }
}