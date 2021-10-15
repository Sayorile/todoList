<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class User extends Model implements Authenticatable
{
    use HasFactory, BasicAuthenticatable;


    /*
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'pseudo',
        'email',
        'password',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
    /*
     * The attributes that should be hidden for serialization.
     *
     * @var array
     
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     *
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];*/
}
