<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public static function getImageUrl($image, string $path)
    {
        $imageName = time().'_'. rand().'.'. $image->getClientOriginalExtension();
        $image->move($path, $imageName);
        return $path. $imageName;
    }
}
