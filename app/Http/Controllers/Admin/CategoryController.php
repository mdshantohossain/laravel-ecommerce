<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        return view('email.category.index');
    }

    public function create()
    {
        return view('email.category.create');
    }

    public function store(Request $request): RedirectResponse
    {

    }

    public function edit(int $id)
    {
        return view('email.category.edit');
    }

    public function update(Request $request, $id): RedirectResponse
    {

    }

    public function delete(int $id)
    {

    }
}
