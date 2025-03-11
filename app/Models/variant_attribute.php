<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class variant_attribute extends Model
{
    
    protected $table='variant_attribute';
    protected $primaryKey='id';

    protected $fillable = [
        'idvariantname',
        'value'
    ];
}
