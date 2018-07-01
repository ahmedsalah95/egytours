<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;
use App\Visitor;
use App\Gallery;
class Trip extends Model
{

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function visitor()
    {
        return $this->hasMany('App\Visitor','trip_id','id');
    }
    public function gallery()
    {
        return $this->hasMany('App\Visitor','trip_id','id');
    }

    public function Trip()
    {
        return $this->hasMany('App\Gallery','trip_id','id');
    }
}
