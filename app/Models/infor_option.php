<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class infor_option extends Model
{
    protected $table='infor_option';
    protected $primaryKey='id';

    protected $fillable = [
        'idproduct',
        'code',
        'price',
        'quantity'
    ];
}
