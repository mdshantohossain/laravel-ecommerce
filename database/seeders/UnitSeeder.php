<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            0 => [
                'name' => 'Phone & accessory',
                'description' => 'This is unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
            1 => [
                'name' => 'Computer & Laptop',
                'description' => 'This is unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
            2 => [
                'name' => 'Clothes',
                'description' => 'This unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
            4 => [
                'name' => 'Health',
                'description' => 'This is unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
            5 => [
                'name' => 'Skin Care',
                'description' => 'This is unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
            6 => [
                'name' => 'Shoes',
                'description' => 'This is unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
            7 => [
                'name' => 'Wearing',
                'description' => 'This is unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
            8 => [
                'name' => 'Jewelry',
                'description' => 'This is unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
            9 => [
                'name' => 'Weeding',
                'description' => 'This is unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
            10 => [
                'name' => 'Season',
                'description' => 'This is unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
            11 => [
                'name' => 'Sports',
                'description' => 'This is unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
            12 => [
                'name' => 'Gym',
                'description' => 'This is unit description',
                'image' => 'admin/assets/img/unit-images/unit.jpg',
                'status' => 1,
            ],
        ];

        foreach ($units as $unit){
            Unit::create([
                'name' => $unit['name'],
                'description' => $unit['description'],
                'image' => $unit['image'],
                'status' => $unit['status'],
                'slug' => strtolower(str_replace(' ', '-', $unit['name']))
            ]);
        }
    }
}
