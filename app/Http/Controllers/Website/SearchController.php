<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();
        if ($request->has('category_id')){
            $query->where('category_id', $request->category_id);
        }

        if (!empty($request->search)){
            $query->where('name', 'LIKE',  '%$request->search%');
            $query->where('short_description', 'LIKE',  '%$request->search%');
            $query->orWhere('long_description', 'LIKE',  '%$request->search%');
        }

        return  view('website.product.search-products', [
            'products' => $query->where('status', 1)->get(),
            'newProducts' => Product::where('status', 1)->orderBy('id', 'DESC')->take(3)->get()
        ]);
    }
}
