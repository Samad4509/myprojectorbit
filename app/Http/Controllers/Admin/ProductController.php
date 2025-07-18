<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
     {
       // examples:
         $this->middleware(['permission:product-list|product-create|product-edit|product-delete'],['only'=>["index","show"]]);
         $this->middleware(['permission:product-edit'],['only'=>["edit","update"]]);
         $this->middleware(['permission:product-create'],['only'=>["create","store"]]);
         $this->middleware(['permission:product-delete'],['only'=>["destroy"]]);  
    }

    public function index()
    {
       $products = Product::all();

       return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return "ok";
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255|unique:products,product_name'
        ], [
            'product_name.required' => 'The product name field is required.',
            'product_name.max' => 'The product name may not be greater than 255 characters.',
            'product_name.unique' => 'This product name already exists.'
        ]);

        $product = new Product();
        $product->product_name = $validatedData['product_name'];
        $product->save();

        return back()->with('success', 'Product created successfully!');
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
        $product = Product::find($id);;
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    $validatedData = $request->validate([
        'product_name' => 'required|string|max:255',
    ]);
    $product = Product::findOrFail($id);
    $product->product_name = $validatedData['product_name'];
    $product->save();

    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product Deleted successfully.');


    }
}
