<?php

namespace Database\Seeders;

use App\Models\Img;
use App\Models\Movie;
use App\Models\Post;
use Database\Factories\ImgFactory;
use Illuminate\Database\Seeder;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
            ->count(1)
            ->has(Img::factory())
            ->has(Movie::factory())
            ->create();
    }
}
