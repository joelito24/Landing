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
    protected $fillable = ['title', 'category', 'description'];

    public function add( $data )
    {
        return $this->create($data);
    }

}