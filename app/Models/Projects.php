<?php

namespace App\Models;
use App;
use DB;
use App\Interfaces\ModelInterface;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model implements ModelInterface
{
    const IMAGE_PATH = 'files/projects/';
    protected $table = 'projects';
    public $timestamps = true;
    protected $fillable = ['title', 'category_id', 'description', 'slug', 'description_big', 'description_short', 'image1', 'image2', 'image3', 'image4', 'image5'];
    protected $appends = ['nameCategory', 'project_id_related'];

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

    public function getImage1Attribute( $image )
    {
        return (filter_var($image, FILTER_VALIDATE_URL) === FALSE) ? $this->imagePath($image) : $image;
    }
    public function getImage2Attribute( $image )
    {
        return (filter_var($image, FILTER_VALIDATE_URL) === FALSE) ? $this->imagePath($image) : $image;
    }
    public function getImage3Attribute( $image )
    {
        return (filter_var($image, FILTER_VALIDATE_URL) === FALSE) ? $this->imagePath($image) : $image;
    }
    public function getImage4Attribute( $image )
    {
        return (filter_var($image, FILTER_VALIDATE_URL) === FALSE) ? $this->imagePath($image) : $image;
    }
    public function getImage5Attribute( $image )
    {
        return (filter_var($image, FILTER_VALIDATE_URL) === FALSE) ? $this->imagePath($image) : $image;
    }

    private function imagePath( $image )
    {
        if (!empty($image)) {
            return asset(self::IMAGE_PATH . $image);
        }
        return false;
    }
    private function projects()
    {
        return $this->hasMany(ProjectsRelated::class, 'project_id', 'id')->get();
    }
    public function getProjectIdRelatedAttribute()
    {
        $projects = $this->projects();
        $return = [];
        foreach ($projects as $project) {
            $return[] = $project->project_id_related;
        }
        return $return;
    }
    public function findAllActive(){
        return $this->where('active', '1')->get();
    }

    public function findBySlug($slug){
        return $this->where('slug', $slug)->first();
    }

    public function findByCategoryId($id){
        return $this->where('category_id', $id)->get();
    }

    public function getProjectRelated()
    {
        $projectsRelated = $this->projects();
        $return = [];
        foreach ($projectsRelated as $projectRelated) {
            $project = $projectRelated->projectsRelated();
            if ($project) {
                $return[] = $project;
            }
        }
        return $return;
    }

}