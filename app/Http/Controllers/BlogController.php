<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Services\Posts\PostServiceInterface;

class BlogController extends Controller
{
    private $blogService;
    public function __construct(PostServiceInterface $blogService)
    {
    $this->blogService = $blogService;
    }

    public function index()
    {
        $posts = $this->blogService->getPaginate(12);

        return view('pages.blog.index',[
            'posts' => $posts
        ]);
    }

    public function show($post)
    {

        $post = Post::where('slug', $post)->with('imgs')->first();

        $outras = Post::where('id', '!=', $post->id)->orderByDesc('id')->take('4')->with('imgs')->get();

            return view('pages.blog.show',[
                'post' =>$post,
                'outras' => $outras
            ]);
        }


}
