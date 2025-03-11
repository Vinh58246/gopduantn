<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    public function category()
{
    return $this->belongsTo(BlogCategory::class, 'category_id');
}
}
