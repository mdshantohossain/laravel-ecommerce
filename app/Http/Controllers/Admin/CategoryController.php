<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index', [
            'categories' => Category::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        try {
            $inputs = $request->except('_token');

            if ($request->has('image')) {
                $inputs['image'] = Image::getImageUrl($request->file('image'), 'admin/assets/img/category-images/');
            }
            Category::create($inputs);

            return back()->with('success', 'Category created successful');
        } catch (\Exception $e){
            return  back()->with('error', $e->getMessage());
        }
    }

    public function edit($slug)
    {
        return view('admin.category.edit', [
            'category' => Category::where('slug', $slug)->first()
        ]);
    }

    public function update(Request $request, string $slug): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        try {
            $category = Category::where('slug', $slug)->first();
            $inputs = $request->except('_token');

            if ($request->has('image')) {
                if (file_exists($category->image)) {
                    unlink($category->image);
                }
                $inputs['image'] = Image::getImageUrl($request->file('image'), 'admin/assets/img/category-images/');
            } else {
                $inputs['image'] = $category->image;
            }

            $category->update($inputs);

            return redirect()->route('category.index')->with('success', 'Category updated successful');
        } catch (\Exception $e) {
            return  throw new \Exception($e->getMessage());
        }
    }

    public function destroy(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        if (file_exists($category->image)) {
            unlink($category->image);
        }
        $category->delete();

        return back()->with('success', 'Category deleted successful');
    }
}
