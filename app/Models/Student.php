<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;


class Student extends Authenticatable
{
    use HasApiTokens;
    protected $fillable = [
        'email',
        'firstName',
        'lastName',
        'dateOfBirth',
        'nationality',
        'currentLevel',
        'fieldOfStudy',
        'role',
        'password',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'dateOfBirth' => 'date', // Add this
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'password',
    ];

    public function applications()
    {
        return $this->hasMany(Applications::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorites::class);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
