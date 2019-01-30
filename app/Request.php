<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Request extends Model
{
    use SoftDeletes;

    public function item() {
    	return $this->belongsTo("\App\Item");
    }

    public function user() {
        return $this->belongsTo("\App\User");
    }

    public function status() {
        return $this->belongsTo("\App\Status");
    }
}
