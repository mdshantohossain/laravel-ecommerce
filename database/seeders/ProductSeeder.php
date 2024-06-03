<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            0 => [
                'name' => 'Band Collar Shirt Men Black Solid Cotton Mandarin Collar - Shirt For Men - Shirt',
                'regular_price' => rand(500, 3000),
                'shor_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.',
                'image' => 'admin/assets/img/product-images/product-1.webp',
                'status' => 1,
            ],
            1 => [
                'name' => 'Band Collar Shirt Men Black Solid Cotton Mandarin Collar - Shirt For Men - Shirt',
                'regular_price' => rand(500, 3000),
                'shor_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.',
                'image' => 'admin/assets/img/product-images/product-2.jpg',
                'status' => 1,
            ],
            2 => [
                'name' => 'Samsung S22 Ultra',
                'regular_price' => rand(500, 3000),
                'shor_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.',
                'image' => 'admin/assets/img/product-images/product-3.jpeg',
                'status' => 1,
            ],
            3 => [
                'name' => 'Print color Jamdhani Saree',
                'regular_price' => rand(500, 3000),
                'shor_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.',
                'image' => 'admin/assets/img/product-images/product-4.jpeg',
                'status' => 1,
            ],
            4 => [
                'name' => 'Xperia 1 V 256GB, factory unlocked smartphone, 6.5” 4K 120Hz display, 4K 120fps HDR, true optical zoom, 5G',
                'regular_price' => rand(500, 3000),
                'shor_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.',
                'image' => 'admin/assets/img/product-images/product-5.jpg',
                'status' => 1,
            ],
            5 => [
                'name' => 'Formal Check Shirt',
                'regular_price' => rand(500, 3000),
                'shor_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.',
                'image' => 'admin/assets/img/product-images/product-6.jpg',
                'status' => 1,
            ],
            6 => [
                'name' => 'Stylish Khimar Borka Hijab With Scart And Niqub Full Set Khimar Borka',
                'regular_price' => rand(500, 3000),
                'shor_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.',
                'image' => 'admin/assets/img/product-images/product-7.jpg',
                'status' => 1,
            ],
            7 => [
                'name' => 'Black T-Shirt',
                'regular_price' => rand(500, 3000),
                'shor_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.',
                'image' => 'admin/assets/img/product-images/product-8.jpeg',
                'status' => 1,
            ],
            8 => [
                'name' => 'Black T-Shirt',
                'regular_price' => rand(500, 3000),
                'shor_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et,',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laboriosam porro quidem ratione tempora! Aliquam dolor dolorum eius rerum vitae. Alias assumenda eos nemo neque quam sed? Alias aliquid amet et, impedit ipsa ipsum laboriosam optio possimus quas reiciendis repellat, repudiandae tempore veritatis. Aliquam atque commodi culpa cum cumque, delectus deserunt dignissimos dolor dolore doloremque eaque eligendi enim error eum exercitationem expedita harum illum incidunt ipsam minima nemo nihil non odio odit officia optio praesentium quae quasi quis ratione repellendus sequi similique, totam velit voluptas voluptate voluptatum. Autem consequatur, culpa dolore dolorum eius eligendi facilis harum illum maxime minima modi mollitia natus nulla obcaecati porro possimus, quaerat quas quo sint sunt vel voluptas voluptatem! Aliquam aliquid harum voluptas! Ab excepturi iste minus nemo recusandae sequi unde veniam? Esse harum iusto quia vitae voluptatem! Exercitationem laboriosam minus nam sapiente suscipit vel veniam! Doloribus eaque eum facere fuga fugit, magni modi natus nobis placeat quam quisquam ratione saepe sit, ullam vero! Ab aliquam blanditiis commodi delectus deserunt dicta dolor dolorem doloremque earum eligendi ex, fuga fugiat fugit hic id illum in iste labore maiores modi neque nesciunt nobis pariatur perferendis porro quasi qui quia, quo repellat reprehenderit saepe sed tempora totam unde.',
                'image' => 'admin/assets/img/product-images/product-8.jpg',
                'status' => 1,
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                'category_id' => rand(1, 8),
                'sub_category_id' => rand(1, 19),
                'brand_id' => rand(1, 10),
                'unit_id' => rand(1, 13),
                'name' => $product['name'],
                'code' => strtoupper(Str::random(12)),
                'stoke_amount' => rand(5, 100),
                'regular_price' => $product['regular_price'],
                'selling_price' => $product['regular_price'] - rand(100, 600),
                'short_description' => $product['shor_description'],
                'long_description' => $product['long_description'],
                'image' => $product['image'],
                'slug' => strtolower(str_replace(' ', '-', $product['name'])).'-'. Str::random(22),
                'status' => $product['status'],
            ]);
        }
    }
}
