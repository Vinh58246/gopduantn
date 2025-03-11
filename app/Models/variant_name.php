<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class variant_name extends Model
{

    protected $table='variant_name';
    protected $primaryKey='id';

    protected $fillable = [
        'idproduct',
        'name'
    ];
}
