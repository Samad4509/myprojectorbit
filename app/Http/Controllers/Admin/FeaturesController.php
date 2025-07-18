<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::with(relations: 'product')->latest()->get();
        return view("admin.feature.index", compact("features"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $products = Product::all();
        return view("admin.feature.create",compact("products"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
         $request->validate([
        'product_id'   => ['required'],
        'feature_name' => 'required|string|max:255',
        ]);

        Feature::create($request->only('product_id', 'feature_name'));
        return redirect()->route('features.index')->with('success', 'Feature created successfully');
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
    public function edit(string $id)
    {
        $feature = Feature::findOrFail($id);
        return view('admin.feature.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'feature_name' => 'required|string|max:255',
        ]);

        $feature = Feature::findOrFail($id);
        $feature->update([
            'product_name' => $request->product_name,
            'feature_name' => $request->feature_name,
        ]);

        return redirect()->route('features.index')->with('success', 'Feature updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feature = Feature::findOrFail($id);
         $feature->delete();
        return redirect()->route('features.index')->with('success', value: 'Feature Deleted successfully!');
    }
}
