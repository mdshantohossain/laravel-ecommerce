<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Unit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.unit.index', [
            'units' => Unit::orderBy('id', 'DESC')->get()
        ]);
    }

    public function create()
    {
        return view('admin.unit.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        try {
            $inputs = $request->except('_token');

            if ($request->has('image')) {
                $inputs['image'] = Image::getImageUrl($request->file('image'), 'admin/assets/img/unit-images/');
            }

            Unit::create($inputs);
            return back()->with('success', 'Unit created successful');

        } catch (\Exception $e) {
            return  back()->with('error', $e->getMessage());
        }
    }

    public function edit(string $slug)
    {
        return view('admin.unit.edit', [
            'unit' => Unit::where('slug', $slug)->first()
        ]);
    }

    public function update(Request $request, string $slug): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        try {
            $unit = Unit::where('slug', $slug)->first();

            $inputs = $request->except('_token');

            if ($request->has('image')) {
                if (file_exists($unit->image)) {
                    unlink($unit->image);
                }
                $inputs['image'] = Image::getImageUrl($request->file('image'), 'admin/assets/img/unit-images/');
            } else {
                $inputs['image'] = $unit->image;
            }

            $unit->update($inputs);
            return redirect()->route('unit.index')->with('success', 'Unit updated successful');

        } catch (\Exception $e) {
            return  back()->with('error', $e->getMessage());
        }
    }

    public function destroy(string $slug)
    {
        $unit = Unit::where('slug', $slug)->first();
        if (file_exists($unit->image)) {
            unlink($unit->image);
        }
        $unit->delete();

        return back()->with('success', 'Unit deleted successful');
    }
}
