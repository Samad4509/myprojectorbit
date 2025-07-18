<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\ItemProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsDetailsController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
         $item = ItemProduct::where('product_id', operator: $id)->first();
         return view('frontend.ecommerce.index', compact('product', 'item'));
    }
}
