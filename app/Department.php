<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function region() 
    {
        return $this->belongsTo(Region::class);
    }

    public function establishments() 
    {
        return $this->hasMany(Establishment::class);
    }
}
