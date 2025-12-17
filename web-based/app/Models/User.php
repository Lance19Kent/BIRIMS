<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
    'name',
    'first_name',
    'last_name',
    'middle_name',
    'email',
    'password',
    'birthdate',
    'gender',
    'phone_number',
    'place_of_birth',
    'citizenship',
    'civil_status',
    'occupation',
    'house_no',
    'street',
    'profile_photo',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'birthdate' => 'date',
        ];
    }
}