<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Vendor extends Model
{
use HasFactory;

    protected $fillable = [
        'shop_name',
        'vendor_username',
        'vendor_email',
        'join_date',
        'status',
    ];
}
