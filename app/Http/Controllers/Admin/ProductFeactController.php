<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Product;
use App\Models\ItemFeature;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ProductFeactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "ok";
        $features = ItemFeature::with('product')->paginate(10);
        return view("admin.itemproducts.featureindex",compact( "features"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return "ok";
        return view("admin.itemproducts.featersedit");
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id|unique:item_features,product_id', // << Updated to correct table
            'section_title' => 'required|string|max:255',
            'feature_title' => 'required|string|max:255',
            'feature_sub_title' => 'required|string|max:255',
            'feature_description' => 'required|string|max:1000',
        ]);

        ItemFeature::create($request->all());

        return redirect()->route('itemfeaturs.index')->with('success', 'Feature added successfully!');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
    {
        $feature = ItemFeature::findOrFail($id);
        $products = Product::all();
        return view('admin.itemproducts.featersedit', compact('feature', 'products'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $feature = ItemFeature::findOrFail($id);

    $request->validate([
        'product_id'=> 'required',
        'section_title' => 'required|string|max:255',
        'feature_title' => 'required|string|max:255',
        'feature_sub_title' => 'required|string|max:255',
        'feature_description' => 'required|string|max:1000',
    ]);

    $feature->update([
        'product_id' => $request->product_id,
        'section_title' => $request->section_title,
        'feature_title' => $request->feature_title,
        'feature_sub_title' => $request->feature_sub_title,
        'feature_description' => $request->feature_description,
    ]);

    return redirect()->route('itemfeaturs.index')->with('success', 'Feature updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $feature = ItemFeature::findOrFail($id);
        $feature->delete();

        return redirect()->route('itemfeaturs.index')->with('success', 'Feature deleted successfully!');
    }

}
