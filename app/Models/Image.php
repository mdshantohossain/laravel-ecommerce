<?php

namespace App\Models;

class Image
{


    public static function getImageUrl($path, $request)
    {
        $image = $request->file('image');
        $imageName = now(). '_'. $image->getClientOriginalExtension().'.'. $image->getClientoriginalExtension();
        $image->move($path, $imageName);
        return $path. $imageName;
    }
}
