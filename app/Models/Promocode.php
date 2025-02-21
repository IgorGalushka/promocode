<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'company_id',
        'discount',
        'is_active',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
