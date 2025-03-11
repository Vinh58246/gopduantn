<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders'; // Tên bảng trong database

    protected $fillable = [
        'title',         // Tiêu đề slider
        'short_title',   // Tiêu đề ngắn
        'image',         // Đường dẫn hình ảnh
    ];
}
