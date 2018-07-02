<?php

namespace App\Models;

use App\Interfaces\ModelInterface;
use Illuminate\Database\Eloquent\Model;

final class ContactsHistory extends Model implements ModelInterface
{
    protected $table = 'contacts_history';
    public $timestamps = true;
    protected $fillable = ['email', 'name', 'consulta', 'consultas', 'web', 'company', 'telephone','created_at', 'updated_at'];

    public function add( $data )
    {
        return $this->create($data);
    }

    public function UpdateActive($id, $status){
        return $this->where('id', $id)->update(array('active' => $status));
    }

    //Metodos FRONT
    public function findAllActive()
    {
        return $this->where('active', '=', 1)->get();
    }

    //Metodos FRONT
    public function validateMail($email)
    {
        return $this->where('email', '=', $email)->get();
    }



}
