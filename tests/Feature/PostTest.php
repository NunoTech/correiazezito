<?php

namespace Tests\Feature;

use App\Models\Img;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_store_post()
    {
        $this->withExceptionHandling();
        $user = User::factory()->create();
        $this->actingAs($user);

        $post = Post::factory()->make([
            'img' => 'Input com endereco do imagem. Não persiste na tabele post'
        ]);



        $response = $this->postJson(route('posts.store'), $post->jsonSerialize());
        $response->assertStatus(200);
//        $this->assertDatabaseHas('posts', $post->jsonSerialize());

    }

    public function test_get_post()
    {
        $response = $this->getJson(route('home.blog', 1));
        $response->assertStatus(200);

    }
}
