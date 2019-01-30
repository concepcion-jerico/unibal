<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    public function requests() {
    	return $this->hasMany("\App\Request");
    }

    public function category() {
        return $this->belongsTo("\App\Category");
    }

    public function status() {
        return $this->belongsTo("\App\Status");
    }
}
