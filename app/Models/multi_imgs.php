<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class multi_imgs extends Model
{
    protected $table='multi_imgs';
    protected $primaryKey='id';

    protected $fillable = [
        'product_id',
        'photo_name'
    ];
}
