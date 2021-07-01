<?php

namespace Database\Seeders;

use App\Models\Img;
use Illuminate\Database\Seeder;

class ImgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Img::factory()->count('20')->create();

    }
}
