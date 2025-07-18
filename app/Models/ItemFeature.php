<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemFeature extends Model
{
    use HasFactory;
    protected $fillable = [
    'product_id',
    'section_title',
    'feature_title',
    'feature_sub_title',
    'feature_description',
];
public function product()
{
    return $this->belongsTo(Product::class, 'product_id');
}
}
