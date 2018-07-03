<?php

namespace App\Models;
use App;
use DB;
use App\Interfaces\ModelInterface;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model implements ModelInterface
{
    protected $table = 'newsletter';
    public $timestamps = true;
    protected $fillable = ['name', 'email'];

    public function add( $data )
    {
        return $this->create($data);
    }
    public function checkEmail( $email )
    {
        return $this->where('email', '=', $email)->first();
    }
}