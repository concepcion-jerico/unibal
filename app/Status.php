<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes;

    public function requests() {
    	return $this->hasMany("\App\Request");
    }    

    public function items() {
    	return $this->hasMany("\App\Item");
    }
}
