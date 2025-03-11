<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $primaryKey='id';
    protected $attributes = [
        'parent_id' => 0
    ];

    protected $fillable = [
        'category_name',
        'category_slug',
        'category_image',
        'parent_id'
    ];
}
