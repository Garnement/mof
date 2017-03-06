<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public function medal()
    {
        return $this->belongsTo(Medal::class);
    }

    public function speciality()
    {
        return $this->hasOne(Speciality::class);
    }

    public function establishments()
    {
        return $this->belongsToMany(Establishment::class);
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }

    public function user()
    {
        return $this->hasOne(Role::class);
    }

    public function candidates()
    {
       return $this->belongsToMany(User::class, 'candidate_master', 'master_id', 'candidate_id');
    }

   public function masters()
   {
       return $this->belongsToMany(User::class, 'candidate_master', 'candidate_id', 'master_id');
   }

   public function profile()
   {
       return $this->belongsTo(Profile::class);
   }

   public function certificates()
   {
     return $this->belongsToMany(Certificate::class);
   }
}
