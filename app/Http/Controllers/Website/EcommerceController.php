<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index()
    {
        return view('website.home.index', [
            'featuredProducts' => Product::where('status', 1)->orderBy('id', 'DESC')->take(8)->get(),
            'popularCategories' => Category::where('status', 1)->orderBy('id', 'DESC')->get(),
            'newArrivals' => Product::where('status', 1)->orderBy('id', 'DESC')->take(6)->get(),
            'brands' => Brand::where('status', 1)->get()
        ]);
    }

    public function about()
    {
        return view('website.about.index');
    }

    public function contact()
    {
        return view('website.contact.index');
    }

    public function privacy()
    {
        return view('website.privacy.index');
    }
}
