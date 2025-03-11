<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'coupon_name', 
        'coupon_discount', 
        'coupon_validity', 
        'status'
    ];

    public function orders() {
        return $this->hasMany(Order::class, 'coupon_id');
    }

}
