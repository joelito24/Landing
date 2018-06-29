<?php

namespace App\Models;
use App;
use DB;
use App\Interfaces\ModelInterface;
use Illuminate\Database\Eloquent\Model;

class Whitepapers extends Model implements ModelInterface
{
    protected $table = 'whitepapers';
    public $timestamps = true;
    protected $fillable = ['title', 'description', 'image'];

    public function add( $data )
    {
        return $this->create($data);
    }
}