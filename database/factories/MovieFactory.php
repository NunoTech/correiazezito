<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' =>'O4EajRlFHEM',
//            'post_id' => Post::factory()->create()->id,

        ];
    }
}
