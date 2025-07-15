<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seo;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
       // examples:
         $this->middleware(['permission:seo-list|seo-create|seo-edit|seo-delete'],['only'=>["index","show"]]);
         $this->middleware(['permission:seo-edit'],['only'=>["edit","update"]]);
         $this->middleware(['permission:seo-create'],['only'=>["create","store"]]);
         $this->middleware(['permission:seo-delete'],['only'=>["destroy"]]);  
    }

    public function index()
    {
        $seos  = Seo::all();
        return view('admin.seo.index',compact('seos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
        return view('admin.seo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        // Validation rules
        $validated = $request->validate([
            'page' => 'required|in:home,brand,service,product,about,contact|unique:seos,page',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:1000',
            'meta_keywords' => '|string|max:255',
        ]);

        // Save SEO data
        $seo = new Seo();
        $seo->page = $validated['page'];
        $seo->meta_title = $validated['meta_title'];
        $seo->meta_description = $validated['meta_description'];
        $seo->meta_keywords = $validated['meta_keywords'];
        $seo->save();

        return redirect()->back()->with('success', 'SEO settings saved successfully!');
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
         $seo  = Seo::find($id);
        return view('admin.seo.edit',compact('seo'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $seo = Seo::find($id);

    // Validation rules
    $validated = $request->validate([
        'page' => 'required|in:home,brand,service,product,about,contact|unique:seos,page,' . $seo->id,
        'meta_title' => 'required|string|max:255',
        'meta_description' => 'required|string|max:1000',
        'meta_keywords' => 'nullable|string|max:255',
    ]);

    // Update SEO data
    $seo->page = $validated['page'];
    $seo->meta_title = $validated['meta_title'];
    $seo->meta_description = $validated['meta_description'];
    $seo->meta_keywords = $validated['meta_keywords'] ?? null;

    $seo->save();

    return redirect('seo')->with('success', 'SEO settings updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
