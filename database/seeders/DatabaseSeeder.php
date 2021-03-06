<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory(5)->create();
        $product = Product::factory(3)->create();  
        $blogs = Blog::factory(3)->create();
        $comments = Comment::factory(5)->create();
        
    }

}