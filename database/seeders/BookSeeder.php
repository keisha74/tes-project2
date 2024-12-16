<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $cover = [
            'Fiction' => 'images/fiction/fiction.jpg',
            'Comedy' => 'images/comedy/comedy.jpg',
            'Philosophy' => 'images/philosophy/philosophy.jpg',
            'Romance' => 'images/romance/romance.jpg',
        ];

        foreach (range(1, 20) as $index) {
            $category = $faker->randomElement(['Fiction', 'Comedy', 'Philosophy', 'Romance']);
            Book::create([
                'title' => $faker->sentence(3),
                'author' => $faker->sentence(2),
                'category' => $category,
                'synopsis' => $faker->paragraph,
                'cover' => $cover[$category],
            ]);
        }
    }
}
