<?php

namespace App\Models;

use App\Http\Controllers\Backend\CategoryController;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $primaryKey='id';

    protected $attributes = [
        'status' => 0
    ];

    protected $fillable = [
        'brand_id',
        'category_id',
        'sub_category_id',
        'product_name',
        'product_slug',
        'product_code',
        'product_qty',
        'product_tags',
        'selling_price',
        'discount_price',
        'short_descp',
        'long_descp',
        'product_thumnail',
        'vendor_id',
        'status'
    ];

}
