<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index()
    {
        return view('website.home.index');
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
