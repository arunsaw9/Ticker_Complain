<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
	public function assets()
    {
        return $this->hasOne('App\Assets', 'id', 'location');
    }

    public function resolutions(){
    	return $this->hasOne('App\Resolution', 'complain_id', 'id');
    }

    
}
