<?php

namespace App\Models;
use App;
use DB;
use App\Interfaces\ModelInterface;
use Illuminate\Database\Eloquent\Model;

class Services extends Model implements ModelInterface
{

    const IMAGE_PATH = 'files/services/';
    protected $table = 'services';
    public $timestamps = true;
    protected $fillable = ['title', 'about', 'description1', 'quote', 'description2', 'conclusion', 'image1', 'image2', 'slug', 'shorttitle'];


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

    private function imagePath( $image )
    {
        if (!empty($image)) {
            return asset(self::IMAGE_PATH . $image);
        }
        return false;
    }

    public function getAllActive(){
        return $this->where('active', '=', 1)->get();
    }

    public function findBySlug($slug){
        return $this->where('slug', '=', $slug)->first();
    }

}