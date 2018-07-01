<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Trip;
class Gallery extends Model
{

    public function trip()
    {
        $this->belongsTo('App\Trip');
    }
}
