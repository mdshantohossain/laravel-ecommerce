<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('website.blog.index');
    }

    public function detail()
    {
        return view('website.blog.detail');
    }
}
