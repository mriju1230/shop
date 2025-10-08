<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('backend.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "logo" => "nullable|image|mimes:jpg,jpeg,png,webp|max:2048"
        ]);

        $fileName = "";

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $fileName = $this->fileUpload($request->file('logo'), "media/brands/");
        }

        // Generate unique slug
        $slug = $this->createSlug($request->name);

        // If slug already exists, append a random number to make it unique
        $slugExists = Brand::where('slug', $slug)->exists();
        if ($slugExists) {
            $slug = $this->createSlug($request->name . " " . rand(1, 100));
        }

        // Create new brand
        Brand::create([
            "name" => $request->name,
            "slug" => $slug,
            "logo" => $fileName
        ]);

        return redirect()->route('brand.index')->with('success', "Brand created successfully!");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('backend.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "logo" => "nullable|image|mimes:jpg,jpeg,png,webp|max:2048"
        ]);

        $fileName = $brand->logo;

        // Handle new logo upload
        if ($request->hasFile('logo')) {
            if ($brand->logo && file_exists(public_path("media/brands/" . $brand->logo))) {
                unlink(public_path("media/brands/" . $brand->logo));
            }
            $fileName = $this->fileUpload($request->file('logo'), "media/brands/");
        }

        // Slug generation with uniqueness check
        $newSlug = $this->createSlug($request->name);

        // If name already exists for another brand, append random number
        $nameExists = Brand::where('name', $request->name)
                        ->where('id', '!=', $brand->id)
                        ->exists();
        if ($nameExists) {
            $newSlug = $this->createSlug($request->name . " " . rand(1, 100));
        }

        // Update brand
        $brand->update([
            "name" => $request->name,
            "slug" => $newSlug,
            "logo" => $fileName
        ]);

        return redirect()->route('brand.index')->with('success', "Brand updated successfully!");
    }


    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('backend.brand.show', compact('brand'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        if ($brand) {
            // Delete logo if exists
            if ($brand->logo && file_exists(public_path("media/brands/" . $brand->logo))) {
                unlink(public_path("media/brands/" . $brand->logo));
            }

            $brand->delete();

            return back()->with('success', "Brand deleted successfully!");
        }

        return back()->with('error', "Brand not found!");
    }

}
