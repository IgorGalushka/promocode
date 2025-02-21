<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    // Связь с таблицей компаний (продавец)
    public function companies()
    {
        return $this->hasMany(Company::class, 'user_id');
    }

    // Связь с таблицей заказов (клиент)
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }
}
