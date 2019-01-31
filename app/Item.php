<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    public function laptoprequests() {
    	return $this->hasMany("\App\LaptopRequest");
    }

    public function category() {
        return $this->belongsTo("\App\Category");
    }

    public function status() {
        return $this->belongsTo("\App\Status");
    }
}
