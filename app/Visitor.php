<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Trip;
class Visitor extends Model
{

    public function trip()
    {
        return $this->belongsTo('App\Trip');
    }
}
