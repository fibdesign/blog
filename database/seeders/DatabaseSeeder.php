<?php

namespace Database\Seeders;

use Fibdesign\Blog\Models\Article;
use Illuminate\Database\Seeder;
use Maxup\Blog\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->count(10)->creaate();
        Article::factory()->count(10)->creaate();
    }
}
