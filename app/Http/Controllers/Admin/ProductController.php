<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::orderBy('id', 'DESC')->get()
        ]);
    }

    public function create()
    {
        return view('admin.product.create',[
            'categories' => Category::where('status', 1)->get(),
            'subCategories' => SubCategory::where('status', 1)->get(),
            'units' => Unit::where('status', 1)->get(),
            'brands' => Brand::where('status', 1)->get()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'unit_id' => 'required',
            'brand_id' => 'required',
            'name' => 'required',
            'code' => 'required',
            'stoke_amount' => 'required|numeric',
            'regular_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'required',
        ]);

        try {

           $product = Product::createNewProduct($request);
           if ($request->has('other_images')) {
               OtherImage::createOtherImage($request->file('other_images'), $product->id);
           }

            return  back()->with('success', 'Product created successful');

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function show(string $slug)
    {
        return view('admin.product.detail', [
            'product' => Product::where('slug', $slug)->first()
        ]);
    }

    public function edit(string $slug)
    {
        return view('admin.product.edit', [
            'product' => Product::where('slug', $slug)->first(),
            'categories' => Category::where('status', 1)->get(),
            'subCategories' => SubCategory::where('status', 1)->get(),
            'units' => Unit::where('status', 1)->get(),
            'brands' => Brand::where('status', 1)->get()
        ]);
    }

    public function update(Request $request, string $slug)
    {
        $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'unit_id' => 'required',
            'brand_id' => 'required',
            'name' => 'required',
            'code' => 'required',
            'stoke_amount' => 'required|numeric',
            'regular_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'short_description' => 'required',
            'long_description' => 'required',
        ]);

        try {

            $product = Product::updateProduct($request, $slug);

            if ($request->has('other_images')) {
                OtherImage::updateOtherImages($request->file('other_images'), $product->id);
            }

            return  redirect()->route('product.index')->with('success', 'Product updated successful');

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(string $slug)
    {
        $product = Product::where('slug', $slug)->first();

        if (file_exists($product->image)) {
            unlink($product->image);
        }

        OtherImage::deleteOtherImages($product->id);

        $product->delete();

        return back()->with('success', 'Product deleted successful');
    }
}
