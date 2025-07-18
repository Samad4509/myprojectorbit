<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemProduct extends Model
{
    use HasFactory;
     protected $fillable = [
        'product_id',
        'banner_title',
        'banner_subtitle',
        'banner_description',
        'product_features',
        'banner_image',
        'tech_images',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];

    protected $casts = [
        'tech_images' => 'array', // decode/encode JSON automatically
    ];

    // Relationship
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
