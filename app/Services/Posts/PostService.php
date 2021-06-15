<?php


namespace App\Services\Posts;



use App\Repositories\Files\FileRepositoryInterface;
use App\Repositories\Posts\PostRepositoryInterface;
use App\Services\Files\FileServiceInterface;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PostService implements PostServiceInterface
{
    protected $postRepository;
    protected $fileService;

    public function __construct(PostRepositoryInterface $postRepository, FileServiceInterface $fileService)
    {
        $this->postRepository = $postRepository;
        $this->fileService = $fileService;
    }

    public function get()
    {
        // TODO: Implement get() method.
    }

    public function getBySlug($slug)
    {
        // TODO: Implement getBySlug() method.
    }

    public function getPaginate($paginate = null)
    {
        return Cache::remember('postPaginated', 60 * 60, function () use ($paginate) {
            return $this->postRepository->getPaginate($paginate);
        });

    }

    public function store($attributes)
    {
        $attributes['slug'] = Str::slug($attributes['title']);
        $post = $this->postRepository->store($attributes);

        $attributes = [
            'post_id' => $post->id,
            'desktop' => substr($attributes['img'], 1, -1),
            'mobile' => substr($attributes['img'], 1, -1),
            'miniatura' => substr($attributes['img'], 1, -1),
        ];
      $this->fileService->save($attributes);
       return Cache::forget('postPaginated');



    }

}
