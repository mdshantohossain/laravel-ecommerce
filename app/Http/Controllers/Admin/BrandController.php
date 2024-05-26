<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('email.brand.index');
    }

    public function create()
    {
        return view('email.brand.create');
    }

    public function store(Request $request): RedirectResponse
    {

    }

    public function edit(int $id)
    {
        return view('email.brand.edit');
    }

    public function update(Request $request, $id): RedirectResponse
    {

    }

    public function delete(int $id)
    {

    }
}
