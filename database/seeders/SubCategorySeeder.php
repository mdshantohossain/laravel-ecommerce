<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subCategories = [
            0 => [
                'name' => 'Mobile',
                'description' => 'This is Mobile description',
                'status' => 1,
            ],
            1 => [
                'name' => 'Computer',
                'description' => 'This is Computer description',
                'status' => 1,
            ],
            2 => [
                'name' => 'Freeze',
                'description' => 'This is Freeze description',
                'status' => 1,
            ],
            4 => [
                'name' => 'Jewelry',
                'description' => 'This is Jewelry description',
                'image' => 'email/assets/img/brand-images/brand-4.png',
                'status' => 1,
            ],
            5 => [
                'name' => "T-Shirt",
                'description' => 'This is T-Shirt description',
                'status' => 1,
            ],
            6 => [
                'name' => 'Shirt',
                'description' => 'This is Shutter Speed brand description',
                'image' => 'email/assets/img/brand-images/brand-6.png',
                'status' => 1,
            ],
            7 => [
                'name' => 'Watch',
                'description' => 'This is Watch description',
                'image' => 'email/assets/img/brand-images/aarong.webp',
                'status' => 1,
            ],
            8 => [
                'name' => 'Glass',
                'description' => 'This is Glass description',
                'image' => 'email/assets/img/brand-images/kay-kraft.png',
                'status' => 1,
            ],
            9 => [
                'name' => 'Pant',
                'description' => 'This is Dorji Bari description',
                'image' => 'email/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
            10 => [
                'name' => 'Panjabi',
                'description' => 'This is Dorji Bari description',
                'image' => 'email/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
            11 => [
                'name' => 'Ornaments',
                'description' => 'This is Dorji Bari description',
                'image' => 'email/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
            12 => [
                'name' => 'Three piece',
                'description' => 'This is Three piece description',
                'image' => 'email/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
            13 => [
                'name' => 'Saree',
                'description' => 'This is Dorji Bari description',
                'image' => 'email/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
            14 => [
                'name' => 'Borkha',
                'description' => 'This is Dorji Bari description',
                'image' => 'email/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
            15 => [
                'name' => 'Khimar',
                'description' => 'This is Dorji Bari description',
                'image' => 'email/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
            16 => [
                'name' => 'Borkha',
                'description' => 'This is Dorji Bari description',
                'image' => 'email/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
            17 => [
                'name' => 'Skin care',
                'description' => 'This is Skin care description',
                'image' => 'email/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
            18 => [
                'name' => 'Heel',
                'description' => 'This is Hair description',
                'image' => 'email/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
            19 => [
                'name' => 'Oil',
                'description' => 'This is Hair description',
                'image' => 'email/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
        ];

        foreach ($subCategories as $subCategory){
            SubCategory::create([
                'category_id' => rand(1,  8),
                'name' => $subCategory['name'],
                'description' => $subCategory['description'],
                'image' => 'email/assets/img/sub-category-images/sub-category.jpg',
                'status' => $subCategory['status']
            ]);
        }
    }
}
