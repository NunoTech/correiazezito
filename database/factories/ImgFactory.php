<?php

namespace Database\Factories;

use App\Models\Img;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ImgFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Img::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $folder = uniqid() . '-' . now()->timestamp;
        mkdir(storage_path('app/public/file/'. $folder),0777,true);

        $pathFile = $this->faker->image(storage_path('app/public/file/'. $folder),'600','480','cats', 'false', true);

        return [
            'path' =>Str::after($pathFile, 'storage/app/public/'),
//            'post_id' => Post::factory()->create()->id,
        ];
    }
}
