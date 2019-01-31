<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes;

    public function laptoprequests() {
    	return $this->hasMany("\App\LaptopRequest");
    }    

    public function items() {
    	return $this->hasMany("\App\Item");
    }
}
