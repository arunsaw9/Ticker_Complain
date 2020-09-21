<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    public function complains()
    {
        return $this->hasOne('App\Complain', 'id', 'complain_id');
    }

    public function solvers(){
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
}




