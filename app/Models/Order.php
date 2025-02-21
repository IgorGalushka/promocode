<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'company_id',
        'user_id',
    ];

    // Связь с компанией (продавец)
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    // Связь с пользователем (клиент)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
