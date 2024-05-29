<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\SubCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.sub-category.index', [
            'subCategories' => SubCategory::orderBy('id', 'DESC')->get()
        ]);
    }

    public function create()
    {
        return view('admin.sub-category.create', [
            'categories' => Category::where('status', 1)->get()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required|min:2',
            'description' => 'required',
        ]);

        try {
            $inputs = $request->except('_token');

            if ($request->has('image')) {
                $inputs['image'] =  Image::getImageUrl($request->file('image'),'admin/assets/img/sub-category-images/');
            }

            SubCategory::create($inputs);

            return back()->with('success', 'Sub category created successful');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit(string $slug)
    {
        return view('admin.sub-category.edit',[
            'categories' => Category::where('status', 1)->get(),
            'subCategory' => SubCategory::where('slug', $slug)->first()
        ]);
    }

    public function update(Request $request, string $slug): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required|min:2',
            'description' => 'required',
        ]);
        $subCategory = SubCategory::where('slug', $slug)->first();

        try {

            $inputs = $request->except('_token');
            if ($request->has('image')) {
                $inputs['image'] = Image::getImageUrl($request->file('image'), 'admin/assets/img/sub-category-images/');
            }

            $subCategory->update($inputs);

            return redirect()->route('sub-category.index')->with('success', 'Sub category created successful');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(string $slug)
    {
        $subCategory = SubCategory::where('slug', $slug)->first();
        if (file_exists($subCategory->image)) {
            unlink($subCategory->image);
        }
        $subCategory->delete();

        return back()->with('success', 'Sub category deleted successful');
    }
}
