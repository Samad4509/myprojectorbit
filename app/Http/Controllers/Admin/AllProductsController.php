<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\ItemProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return view("admin.itemproducts.itemproduct",compact("products"));
    }
    public function store(Request $request){
        $data = $request->validate([
            'product_id' => 'required|exists:products,id|unique:item_products,product_id',
            'banner_title' => 'required|string|max:255',
            'banner_subtitle' => 'nullable|string|max:255',
            'banner_description' => 'nullable|string',
            'product_features' => 'nullable|string',
            'banner_image' => 'nullable|image|max:5120',
            'tech_images.*' => 'nullable|image|max:5120',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        // Handle banner_image
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/banners'), $name);
            $data['banner_image'] = 'uploads/banners/' . $name;
        }

        // Handle tech_images
        if ($request->hasFile('tech_images')) {
            $paths = [];
            foreach ($request->file('tech_images') as $img) {
                $filename = time().'_'.uniqid().'.'.$img->getClientOriginalExtension();
                $img->move(public_path('uploads/tech_images'), $filename);
                $paths[] = 'uploads/tech_images/' . $filename;
            }
            $data['tech_images'] = json_encode($paths);
        }

        ItemProduct::create($data);
        return redirect()->route('all.create')->with('success', 'Banner created successfully!');
    }

   public function manage()
    {
        $items = ItemProduct::with('product')->paginate(10);
        return view('admin.itemproducts.manage', compact('items'));
    }
    public function edit($id)
    {
        $item = ItemProduct::findOrFail($id);
        $products = Product::all(); // For the dropdown

        return view('admin.itemproducts.edit', compact('item', 'products'));
    }

    public function update(Request $request, $id)
{
    $item = ItemProduct::findOrFail($id);

    $data = $request->validate([
        // 'product_id' => 'required',
        'banner_title' => 'required|string|max:255',
        'banner_subtitle' => 'nullable|string|max:255',
        'banner_description' => 'nullable|string',
        'product_features' => 'nullable|string',
        'banner_image' => 'nullable|image|max:5120',
        'tech_images.*' => 'nullable|image|max:5120',
        'meta_title' => 'nullable|string|max:255',
        'meta_keywords' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:500',
    ]);

    // Banner image
    if ($request->hasFile('banner_image')) {
        $file = $request->file('banner_image');
        $name = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('uploads/banners'), $name);
        $data['banner_image'] = 'uploads/banners/' . $name;
    }

    // Technology images
    if ($request->hasFile('tech_images')) {
        $paths = [];
        foreach ($request->file('tech_images') as $img) {
            $filename = time().'_'.uniqid().'.'.$img->getClientOriginalExtension();
            $img->move(public_path('uploads/tech_images'), $filename);
            $paths[] = 'uploads/tech_images/' . $filename;
        }
        $data['tech_images'] = json_encode($paths);
    }

    $item->update($data);

    return redirect()->route('all.manage')->with('success', 'Banner updated successfully!');
}

public function destroy($id)
{
    $item = ItemProduct::findOrFail($id); // or Product::findOrFail($id)
    
    // Optional: delete image files from storage
    if ($item->banner_image && file_exists(public_path($item->banner_image))) {
        unlink(public_path($item->banner_image));
    }

    if ($item->tech_images) {
        foreach (json_decode($item->tech_images) as $img) {
            if (file_exists(public_path($img))) {
                unlink(public_path($img));
            }
        }
    }

    $item->delete();

    return redirect()->route('all.manage')->with('success', 'Item deleted successfully.');
}

}
