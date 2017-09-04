<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Adminuser extends Model
{
    protected $table = 'adminuser';
    public function userPassword($username){
        return $this->where('user_name',$username)->first();
    }
}
