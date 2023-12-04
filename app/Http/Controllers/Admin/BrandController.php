<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::paginate(10);
        return view('admin.brands.index', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100|min:2|unique:brands,name',
            'country' => 'required',
            'description' => 'required',
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->country = $request->country;
        $brand->description = $request->description;
        $brand->save();
        return redirect()->route('brands.index')
            ->with("success", "Brand created successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('admin.brands.show', ['brand' => $brand]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $t = 2;
        $brand->update([
            'name' => $request->name,
            'country' => $request->country,
            'description' => $request->description,
        ]);

        return redirect()->route('brands.show', $brand->id)
            ->with("success", "Brand updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')
            ->with("success", "Brand [{$brand->name}] deleted successfully!");
    }

    public function trashed()
    {
        $brands = Brand::onlyTrashed()->paginate(10);
        return view('admin.brands.trashed', ['brands' => $brands]);
    }

    public function restore(Request $request, int $id)
    {
        Brand::withTrashed()
            ->where('id', $id)
            ->restore();

        return redirect()->route('brands.index')
            ->with("success", "Brand restored successfully!");
    }

    public function forceDestroy(Request $request, int $id)
    {
        Brand::withTrashed()
            ->where('id', $id)
            ->forceDelete();

        return redirect()
            ->route('brands.trashed')
            ->with("success", "Brand force deleted successfully!");
    }
}
