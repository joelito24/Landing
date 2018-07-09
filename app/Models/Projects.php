<?php

namespace App\Models;
use App;
use DB;
use App\Interfaces\ModelInterface;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model implements ModelInterface
{
    protected $table = 'projects';
    public $timestamps = true;
    protected $fillable = ['title', 'category_id', 'description', 'slug'];
    protected $appends = ['nameCategory'];

    private function category()
    {
        return $this->belongsTo(ProjectsCategory::class, 'category_id', 'id')->first();
    }

    public function getNameCategoryAttribute()
    {
        $category = $this->category();
        if (!empty($category)) {
            return $category->name;
        }
        return false;
    }

    public function add( $data )
    {
        return $this->create($data);
    }

    public function findAllActive(){
        return $this->where('active', '1')->get();
    }

    public function findBySlug($slug){
        return $this->where('slug', $slug)->first();
    }

}