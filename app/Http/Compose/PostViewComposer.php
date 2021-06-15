<?php


namespace App\Http\Compose;


use App\Models\Post;

class PostViewComposer
{
    private $posts;
    public function __construct(Post $posts)
    {
        $this->posts = $posts;

    }

    public function compose($view)
    {

        return $view->with('totalPosts', $this->posts->count());
    }
}
