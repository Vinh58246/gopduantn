<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class variant_option extends Model
{
    protected $table='variant_option';

    protected $primaryKey='id';

    protected $fillable = [
        'variant_attribute_id',
        'infor_option_id',
    ];
}
