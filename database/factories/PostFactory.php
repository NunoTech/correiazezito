<?php

namespace Database\Factories;

use App\Models\Post;
use App\Services\Caches\CacheService;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $title = $this->faker->sentence(10,true);
        $slug = Str::slug($title);
        return [
            'title' => $title,
            'subtitle' => $this->faker->sentence(10,true),
            'slug' => $slug,
            'text' => $this->faker->paragraph(3,true),
        ];
    }
}
