<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\ItemFeature;
use App\Models\ItemProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsDetailsController extends Controller
{
    public function show($id)
    {

        $product = Product::findOrFail($id);
          $itemfeaturs = ItemFeature::where('product_id', $id)->get();
         $item = ItemProduct::where('product_id', operator: $id)->first();
         return view('frontend.ecommerce.index', compact('product', 'item','itemfeaturs'));
    }
}
