<?php

namespace App\Models;
use App;
use DB;
use App\Interfaces\ModelInterface;
use Illuminate\Database\Eloquent\Model;

class ProjectsCategory extends Model implements ModelInterface
{
    protected $table = 'projects_category';
    public $timestamps = true;
    protected $fillable = ['name', 'active'];

    public function add( $data )
    {
        return $this->create($data);
    }

    public function findAllActive(){
        return $this->where('active', '1')->get();
    }

    public function children()
    {
        return $this->hasMany(ProjectsCategory::class, 'id')->get();
    }

    public function getChildren()
    {
        return $this->children();
    }

}