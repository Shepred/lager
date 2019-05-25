<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
	public function skus()
    {
        return $this->hasMany('App\SKU');
    }
}