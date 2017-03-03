<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function departments() 
    {
        return $this->hasMany(Department::class);
    }

    public function establishments()
    {
        //Pour accèder à l'etablissement on passe par le departement
        return $this->hasManyThrough(Establishment::class, Department::class);
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
