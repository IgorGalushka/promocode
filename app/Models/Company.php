<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'is_active',
    ];

    // Связь с пользователем (продавец)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Связь с заказами (продавец)
    public function orders()
    {
        return $this->hasMany(Order::class, 'company_id');
    }

    // Связь с промокодами
    public function promocodes()
    {
        return $this->hasMany(Promocode::class, 'company_id');
    }
}
