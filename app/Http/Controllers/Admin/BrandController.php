<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.index', [
            'brands' => Brand::orderBy('id', 'DESC')->get()
        ]);
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|min:2',
            'description' => 'required',
            'image' => 'required'
        ]);

        try {
            $inputs = $request->except('_token');
            $inputs['image'] = Image::getImageUrl($request->file('image'), 'admin/assets/img/brand-images/');

            Brand::create($inputs);
            return back()->with('success', 'Brand created successful');

        } catch (\Exception $e) {
            return  back()->with('error', $e->getMessage());
        }
    }

    public function edit(string $slug)
    {
        return view('admin.brand.edit', [
            'brand' => Brand::where('slug', $slug)->first()
        ]);
    }

    public function update(Request $request, $slug): RedirectResponse
    {
        $request->validate([
            'name' => 'required|min:2',
            'description' => 'required',
        ]);

        try {
            $brand = Brand::where('slug', $slug)->first();

            $inputs = $request->except('_token');
            if ($request->has('image')) {
                if (file_exists($brand->image)) {
                    unlink($brand->image);
                }
                $inputs['image'] = Image::getImageUrl($request->file('image'), 'admin/assets/img/brand-images/');
            } else {
                $inputs['image'] = $brand->image;
            }

            $brand->update($inputs);
            return redirect()->route('brand.index')->with('success', 'Brand updated successful');

        } catch (\Exception $e) {
            return  back()->with('error', $e->getMessage());
        }
    }

    public function destroy(string $slug)
    {
        $brand = Brand::where('slug', $slug)->first();

        if (file_exists($brand->image)){
            unlink($brand->image);
        }

        $brand->delete();
        return back()->with('success', 'Brand deleted successful');
    }
}
