<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    public function department() 
    {
        return $this->belongsTo(Department::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function scopeAllUsers($query, string $type)
    {
        return $query
            ->join('establishment_user', 'establishment_user.establishment_id', '=', 'establishments.id')
            ->join('users', 'users.id', '=', 'establishment_user.user_id')
            ->select('users.*')
            ->where('type', $type)
            ->orderBy('name');
    }
}
    