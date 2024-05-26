<?php

namespace Database\Seeders;

use App\Models\OtherImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtherImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $otherImages = [
            0 => [
                'product_id' => 1,
                'image' => [
                    'email/assets/img/product-other-images/product-1-1.webp',
                    'email/assets/img/product-other-images/product-1-2.jpeg',
                    'email/assets/img/product-other-images/product-1-3.jpeg',
                ]
            ],
            1 => [
                'product_id' => 2,
                'image' => [
                    'email/assets/img/product-other-images/product-2-1.jpg',
                    'email/assets/img/product-other-images/product-2-2.jpeg',
                    'email/assets/img/product-other-images/product-2-3.jpeg',
                    'email/assets/img/product-other-images/product-2-4.jpeg',
                ]
            ],
            2 => [
                'product_id' => 3,
                'image' => [
                    'email/assets/img/product-other-images/product-3-1.jpeg',
                    'email/assets/img/product-other-images/product-3-2.jpeg',
                    'email/assets/img/product-other-images/product-3-3.jpeg',
                    'email/assets/img/product-other-images/product-3-4.jpeg',
                ]
            ],
            3 => [
                'product_id' => 4,
                'image' => [
                    'email/assets/img/product-other-images/product-4-1.jpeg',
                    'email/assets/img/product-other-images/product-4-2.jpg',
                    'email/assets/img/product-other-images/product-4-3 .webp',
                ]
            ],
            4 => [
                'product_id' => 5,
                'image' => [
                    'email/assets/img/product-other-images/product-5-1.jpg',
                    'email/assets/img/product-other-images/product-5-2.jpg',
                    'email/assets/img/product-other-images/product-5-3.jpg',
                    'email/assets/img/product-other-images/product-5-4.jpg',
                ]
            ],
            5 => [
                'product_id' => 6,
                'image' => [
                    'email/assets/img/product-other-images/product-6-1.jpg',
                    'email/assets/img/product-other-images/product-6-2.jpg',
                    'email/assets/img/product-other-images/product-6-3.jpg',
                    'email/assets/img/product-other-images/product-6-4.jpg',
                ]
            ],
            6 => [
                'product_id' => 7,
                'image' => [
                    'email/assets/img/product-other-images/product-7-1.jpg',
                    'email/assets/img/product-other-images/product-7-2.jpg',
                    'email/assets/img/product-other-images/product-7-3.jpg',
                    'email/assets/img/product-other-images/product-7-4.jpg',
                ]
            ],
            7 => [
                'product_id' => 8,
                'image' => [
                    'email/assets/img/product-other-images/product-8-1.jpeg',
                    'email/assets/img/product-other-images/product-8-2.jpeg',
                    'email/assets/img/product-other-images/product-8-3.jpeg',
                ]
            ],
            8 => [
                'product_id' => 9,
                'image' => [
                    'email/assets/img/product-other-images/product-8-1.jpeg',
                    'email/assets/img/product-other-images/product-8-2.jpeg',
                    'email/assets/img/product-other-images/product-8-3.jpeg',
                ]
            ],
        ];

        foreach ($otherImages as $otherImage){
            foreach ($otherImage['image'] as $image)

            OtherImage::create([
               'product_id' => $otherImage['product_id'],
               'image' => $image
            ]);

        }
    }
}
