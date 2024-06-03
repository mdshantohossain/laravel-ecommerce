<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public static function createNewProduct($request)
    {
        $product = new Product();
        $product->category_id       = $request->category_id;
        $product->sub_category_id   = $request->sub_category_id;
        $product->unit_id           = $request->unit_id;
        $product->brand_id          = $request->brand_id;
        $product->name              = $request->name;
        $product->code              = strtoupper($request->code);
        $product->stoke_amount      = $request->stoke_amount;
        $product->regular_price     = $request->regular_price;
        $product->offer             = $request->offer;
        $product->selling_price     = $request->selling_price;
        $product->short_description = $request->short_description;
        $product->long_description  = $request->long_description;
        $product->image             = Image::getImageUrl($request->file('image'), 'admin/assets/img/product-images/');
        $product->slug              = $request->slug;
        $product->status            = $request->status;
        $product->save();

        return $product;
    }

    public static function updateProduct($request, string $slug)
    {
       $product = Product::where('slug', $slug)->first();

        try {
            if ($request->has('image'))
            {
                if (file_exists($product->image)) {
                    unlink($product->image);
                }
                $image = Image::getImageUrl($request->file('image'), 'admin/assets/img/product-images/');
            } else {
                $image = $product->image;
            }

            $product->category_id       = $request->category_id;
            $product->sub_category_id   = $request->sub_category_id;
            $product->unit_id           = $request->unit_id;
            $product->brand_id          = $request->brand_id;
            $product->name              = $request->name;
            $product->code              = strtoupper($request->code);
            $product->stoke_amount      = $request->stoke_amount;
            $product->regular_price     = $request->regular_price;
            $product->offer             = $request->offer;
            $product->selling_price     = $request->selling_price;
            $product->short_description = $request->short_description;
            $product->long_description  = $request->long_description;
            $product->image             = $image;
            $product->slug              = $request->slug;
            $product->status            = $request->status;
            $product->save();

            return $product;
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function otherImages(): HasMany
    {
        return $this->hasMany(OtherImage::class);
    }
}
