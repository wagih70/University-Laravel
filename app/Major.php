<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
