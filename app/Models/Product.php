<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    protected $fillable = [
        'brand_id',
        'category_id',
        'subcategory_id',
        'product_name',
        'product_slug',
        'product_code',
        'product_qty',
        'selling_price',
        'discount_price',
        'short_descp',
        'long_descp',
        'product_thumbnail',
        'vendor_id',
        'status',
    ];
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }
}
