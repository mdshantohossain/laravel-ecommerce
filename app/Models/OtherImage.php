<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    use HasFactory;


    public static function createOtherImage($images, int $id)
    {
        foreach ($images as $image) {
            $otherImage = new OtherImage();
            $otherImage->product_id = $id;
            $otherImage->image = Image::getImageUrl($image, 'admin/assets/img/product-other-images/');
            $otherImage->save();
        }
    }

    public static function updateOtherImages(array $images, int $id)
    {
        $otherImages = OtherImage::where('product_id', $id)->get();
        foreach ($otherImages as $otherImage) {
            if (file_exists($otherImage->image)) {
                unlink($otherImage->image);
            }
            $otherImage->delete();
        }
        self::createOtherImage($images, $id);
    }

    public static function deleteOtherImages($id)
    {
        $otherImages = OtherImage::where('product_id', $id)->get();
        if (!empty($otherImages)) {
            foreach ($otherImages as $otherImage) {
                if (file_exists($otherImage->image)){
                    unlink($otherImage->image);
                }
                $otherImage->delete();
            }
        }
    }
}
