<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function categoryProduct($name)
    {

        $category = Category::where('name', $name)->first();
        return view('website.product.index', [
            'products' => Product::where('category_id', $category->id)
                                 ->where('status', 1)->get(),
            'newProducts' => Product::where('category_id', $category->id)
                                 ->orderBy('id', 'DESC')
                                 ->take(3)
                                 ->get()
        ]);
    }

    public function subCategoryProduct($name)
    {
        $subCategory = SubCategory::where('name', $name)->first();

        return view('website.product.index', [
            'products' => Product::where('sub_category_id', $subCategory->id)
                                  ->where('status', 1)->get(),
            'newProducts' => Product::where('category_id', $subCategory->id)
                                    ->orderBy('id', 'DESC')
                                    ->take(3)
                                    ->get()
        ]);
    }

    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('website.product.detail', [
            'product' => $product,
            'relatedProducts' => Product::where('id', '!=', $product->id)
                                        ->where('category_id', $product->category_id)
                                        ->orderBy('id', 'DESC')
                                        ->get()
        ]);
    }
}
