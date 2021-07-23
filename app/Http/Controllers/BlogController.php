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

    /**
     * @param int $quantityPost
     * @return \Exception|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     *
     */
    public function index(int $quantityPost = 12)
    {
        try {
            $posts = $this->postService->getPaginate($quantityPost);
            return view('pages.blog.index', [
                'posts' => $posts
            ]);
        }catch (\Exception $exception) {
            return  $exception;
        }
    }

    /**
     * @param $slug
     * @return \Exception|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     *
     */
    public function show($slug)
    {
        try {
            $post = $this->postService->getBySlug($slug);
            return view('pages.blog.show', [
                'post' => $post,
            ]);
        }catch (\Exception $exception) {
            return  $exception;
        }
    }

}
