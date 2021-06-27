<?php

namespace Database\Factories;

use App\Models\Img;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $path = storage_path('app/publifile/'. $folder .'/');

        dd($this->faker->image($path,'600','480'));

        $path = $this->faker->image(storage_path('file/'. $folder .'/'), 640, 480, 'cats', false);
        return [
            'desktop' => $path,
            'mobile' => $path,
            'miniatura' => $path,
            'post_id' => Post::factory()->create()->id,
        ];
    }
}
