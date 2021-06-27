<?php

namespace App\Http\Controllers;



use App\Services\Posts\PostServiceInterface;

class BlogController extends Controller
{
    private $postService;

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getPaginate(12);


        return view('pages.blog.index', [
            'posts' => $posts
        ]);
    }

    public function show($slug)
    {
        $post = $this->postService->getBySlug($slug);

        return view('pages.blog.show', [
            'post' => $post,

        ]);
    }


}
