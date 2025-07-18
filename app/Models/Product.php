<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =["name","product_name"];
     public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
