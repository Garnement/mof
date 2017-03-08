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

    public function allUsers(string $type='candidate')
    {
      $data = [];

      foreach ($this->establishments as $establishment)
      {
          $data[] = $establishment->allUsers($type)->get();
      }

      return empty($data) ? collect($data): $data;
    }
}
