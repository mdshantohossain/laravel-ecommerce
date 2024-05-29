<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            0 => [
                'name' => 'Mobile',
                'description' => 'This is Mobile category description',
                'image' => 'admin/assets/img/category-images/category-1.svg',
                'status' => 1,
            ],
            1 => [
                'name' => 'Electronics',
                'description' => 'This is Electronics category description',
                'image' => 'admin/assets/img/category-images/category-2.svg',
                'status' => 1,
            ],
            2 => [
                'name' => 'Ladies & Clothes Fashion',
                'description' => 'This is Ladies & Clothes Fashion description',
                'image' => 'admin/assets/img/category-images/category-3.svg',
                'status' => 1,
            ],
            3 => [
                'name' => 'Men Fashion',
                'description' => 'This is Men Fashion description',
                'image' => 'admin/assets/img/category-images/man-fashion.jpg',
                'status' => 1,
            ],
            5 => [
                'name' => 'Sports & Gym',
                'description' => 'This is Sports & Gym  description',
                'image' => 'admin/assets/img/category-images/category-9.svg',
                'status' => 1,
            ],
            6 => [
                'name' => 'Pet & Animals',
                'description' => 'This is Pet & Animals  description',
                'image' => 'admin/assets/img/category-images/category-11.svg',
                'status' => 1,
            ],
            7 => [
                'name' => 'Real State',
                'description' => 'This is Real State description',
                'image' => 'admin/assets/img/category-images/category-7.svg',
                'status' => 1,
            ],
            8 => [
                'name' => 'House Hold',
                'description' => 'This is House Hold description',
                'image' => 'admin/assets/img/category-images/category-1.svg',
                'status' => 1,
            ],
        ];

        foreach ($categories as $category){
            Category::create([
                'name' => $category['name'],
                'description' => $category['description'],
                'image' => $category['image'],
                'status' => $category['status'],
                'slug' => strtolower(str_replace(' ', '-', $category['name']))
            ]);
        }
    }
}
