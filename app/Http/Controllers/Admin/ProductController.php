<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('email.product.index');
    }

    public function create()
    {
        return view('email.product.create');
    }

    public function store(Request $request): RedirectResponse
    {

    }

    public function edit(int $id)
    {
        return view('email.product.edit');
    }

    public function update(Request $request, $id): RedirectResponse
    {

    }

    public function delete(int $id)
    {

    }
}
