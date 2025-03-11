<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnOrder extends Model
{
    protected $fillable = ['order_id', 'reason', 'status'];
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
