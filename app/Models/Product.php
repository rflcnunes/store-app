<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'product_user');
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'image_product');
    }
}
