<?php

namespace App\Models;
use App;
use DB;
use App\Interfaces\ModelInterface;
use Illuminate\Database\Eloquent\Model;

class Whitepapers extends Model implements ModelInterface
{
    const IMAGE_PATH = 'files/documents/';

    protected $table = 'whitepapers';
    public $timestamps = true;
    protected $fillable = ['title', 'description', 'image', 'data_file', 'active'];

    public function add( $data )
    {
        return $this->create($data);
    }

    public function findAllActive(){
        return $this->where('active', 1)->get();
    }

    public function findLast(){
        return $this->where('active', 1)->orderBy('created_at', 'desc')->first();
    }
}