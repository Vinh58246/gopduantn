<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    //
    protected $primaryKey='id';

    protected $fillable = [
        'brand_name',
        'brand_slug',
        'brand_image'
    ];
}
