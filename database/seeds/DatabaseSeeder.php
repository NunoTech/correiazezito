<?php

use Database\Seeders\ImgTableSeeder;
use Database\Seeders\PostsTableSeeder;
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
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
//        $this->call(ImgTableSeeder::class);
    }
}
