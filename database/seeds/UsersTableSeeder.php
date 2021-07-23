<?php


use App\Models\Img;
use App\Models\Movie;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::factory()
          ->has(Post::factory()
              ->count(10)
              ->has(Img::factory())
              ->has(Movie::factory())
          )->create();
    }
}
