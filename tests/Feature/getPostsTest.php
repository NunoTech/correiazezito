<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class getPostsTest extends TestCase
{
    use RefreshDatabase;
    protected $faker;

    public function setUp(): void
    {
        parent::setUp();
        $this->faker = Post::factory()->count(30)->create();

    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_posts_of_home_page()
    {
        $response = $this->getJson(route('home.blog'));
        $response->assertOk();

//        $response->assertJsonStructure($this->faker);
    }
}
