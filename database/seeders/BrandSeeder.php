<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            0 => [
                'name' => 'The Retro',
                'description' => 'This is The Retro brand description',
                'image' => 'admin/assets/img/brand-images/brand-1.png',
                'status' => 1,
            ],
            1 => [
                'name' => 'Design Hub',
                'description' => 'This is Design Hub brand description',
                'image' => 'admin/assets/img/brand-images/brand-2.png',
                'status' => 1,
            ],
            2 => [
                'name' => 'Travel',
                'description' => 'This is Travel brand description',
                'image' => 'admin/assets/img/brand-images/brand-3.png',
                'status' => 1,
            ],
            4 => [
                'name' => 'Mock up',
                'description' => 'This is Mock up brand description',
                'image' => 'admin/assets/img/brand-images/brand-4.png',
                'status' => 1,
            ],
            5 => [
                'name' => 'The Backyard',
                'description' => 'This is The Backyard brand description',
                'image' => 'admin/assets/img/brand-images/brand-5.png',
                'status' => 1,
            ],
            6 => [
                'name' => 'Shutter Speed',
                'description' => 'This is Shutter Speed brand description',
                'image' => 'admin/assets/img/brand-images/brand-6.png',
                'status' => 1,
            ],
            7 => [
                'name' => 'Aarong',
                'description' => 'This is Aarong brand description',
                'image' => 'admin/assets/img/brand-images/aarong.webp',
                'status' => 1,
            ],
            8 => [
                'name' => 'Kay Kraft',
                'description' => 'This is Kay Kraft brand description',
                'image' => 'admin/assets/img/brand-images/kay-kraft.png',
                'status' => 1,
            ],
            9 => [
                'name' => 'Dorji Bari',
                'description' => 'This is Dorji Bari description',
                'image' => 'admin/assets/img/brand-images/dorji-bari.png',
                'status' => 1,
            ],
        ];

        foreach ($brands as $brand){
            Brand::create([
                'name' => $brand['name'],
                'description' => $brand['description'],
                'image' => $brand['image'],
                'status' => $brand['status'],
                'slug' => strtolower(str_replace(' ', '-', $brand['name']))
            ]);
        }
    }
}
