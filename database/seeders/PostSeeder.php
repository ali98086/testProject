<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i=0; $i<50; $i++){

            Post::factory()->hasTags(rand(2,10))->create(['title'=>Str::random(8), 'body'=>fake()->text(60)]);
            Tag::factory()->has(Category::factory()->count(rand(2,8)),'categories')->create();
            
        }

        
    }
}
