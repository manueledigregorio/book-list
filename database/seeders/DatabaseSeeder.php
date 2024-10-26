<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $categories = [
            'Fiction',
            'Non-Fiction',
            'Fantasy',
            'Science Fiction',
            'Mystery',
            'Biography',
            'Self-Help',
            'Romance',
            'Historical Fiction',
            'Thriller',
            'Young Adult',
            'Cookbooks',
            'Travel',
            'Health & Wellness',
            'Business',
            'Philosophy',
            'Poetry',
            'Graphic Novels',
            'Religion & Spirituality',
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create(['name' => $category]);
        }
    }
}
