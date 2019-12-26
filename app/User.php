<?php

namespace App;

use App\Flower;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password','status' ,'remember_token',
    ];

    const ADMIN_TYPE = 1;
    const DEFAULT_TYPE = 0;
    public function isAdmin(){
        return $this->type === self::ADMIN_TYPE;
    }

    public function flowers()
    {
        return $this->hasMany(Flower::class);
    }

}
