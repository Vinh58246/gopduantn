<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id', 'coupon_id', 'name', 'email', 'phone', 'address', 
        'notes', 'payment_method', 'transaction_id', 'amount', 
        'discount_amount', 'order_number', 'invoice_no', 'status', 
        'date', 'return_reason', 'return_order'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function coupon() {
        return $this->belongsTo(Coupon::class);
    }
}

