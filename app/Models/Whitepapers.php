<?php

namespace App\Models;
use App;
use DB;
use App\Interfaces\ModelInterface;
use Illuminate\Database\Eloquent\Model;

class Whitepapers extends Model implements ModelInterface
{
    const IMAGE_PATH = 'files/whitepapers/';

    protected $table = 'whitepapers';
    public $timestamps = true;
    protected $fillable = ['title', 'description', 'image', 'data_file', 'active', 'home', 'number', 'order'];

    private function imagePath( $image )
    {
        if (!empty($image)) {
            return asset(self::IMAGE_PATH . $image);
        }
        return false;
    }

    public function add( $data )
    {
        return $this->create($data);
    }

    public function getImageAttribute( $image )
    {
        return (filter_var($image, FILTER_VALIDATE_URL) === FALSE) ? $this->imagePath($image) : $image;
    }

    public function findAllActive(){
        return $this->where('active', 1)->orderBy('order', 'asc')->get();
    }

    public function findLastHome(){
        return $this->where('active', 1)->where('home', 1)->orderBy('created_at', 'desc')->first();
    }

    public function findLast(){
        return $this->where('active', 1)->orderBy('created_at', 'desc')->first();
    }
}