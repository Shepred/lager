<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SKU extends Model
{
    public function position()
    {
        return $this->belongsTo('App\Position');
    }
}
