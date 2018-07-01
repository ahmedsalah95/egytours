<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function trips()
    {
        return $this->hasMany('App/Trip','category_id','id');
    }
}
