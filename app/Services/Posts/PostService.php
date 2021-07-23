<?php


namespace App\Services\Posts;


use App\Models\Movie;
use App\Repositories\Files\UserRepositoryInterface;
use App\Repositories\Posts\PostRepositoryInterface;
use App\Services\Caches\CacheService;
use App\Services\Caches\CacheServiceInterface;
use App\Services\Files\FileServiceInterface;
use App\Services\Movies\MoviesService;
use App\Services\Movies\MoviesServiceInterface;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PostService implements PostServiceInterface
{
    protected $postRepository;
    protected $fileService;
    protected $movieService;
    protected $cacheService;

    public function __construct(PostRepositoryInterface $postRepository,
                                FileServiceInterface $fileService,
                                MoviesServiceInterface $moviesService,
                                CacheServiceInterface $cacheService

    )
    {
        $this->postRepository = $postRepository;
        $this->fileService = $fileService;
        $this->movieService = $moviesService;
        $this->cacheService = $cacheService;
    }

    public function getBySlug($slug)
    {
        return Cache::remember('post' . $slug . 'CachedKey', 60 * 60, function () use ($slug) {
            return $this->postRepository->getBySlug($slug);
        });

    }

    public function getPaginate($paginate = null)
    {

        return Cache::remember('pagedCache', 60 * 60, function () use ($paginate) {
            return $this->postRepository->getPaginate($paginate);
        });

    }

    public function store($attributes)
    {
        $post = $this->postRepository->store($attributes);
        $this->fileService->save($post->id, $attributes['img']);

        if (!is_null($attributes['movie'])) {
             $this->movieService->save($post->id, $attributes['movie']);
        }

       $this->cacheService->removeCachePaginate();

    }

    public function update($post, $slug)
    {
        $getPostForUpdate = $this->getBySlug($slug);
        $this->postRepository->update($post, $getPostForUpdate->id);

        if (is_null($post['img']) and is_null($post['movie']))
            return $this->cacheService->removeCachePerSlug($slug);

        if (!is_null($post['movie'])) {
            collect($getPostForUpdate->movies)->map(function ($movie){
                return $this->movieService->delete($movie->id);
            });
                $this->movieService->save($getPostForUpdate->id, $post['movie']);
        }

        if (!is_null($post['img'])) {
            collect($getPostForUpdate->imgs)->map(function ($img){
                return $this->fileService->delete($img->id);
            });
            $this->fileService->save($getPostForUpdate->id, $post['img']);
        }

        return $this->cacheService->removeCachePerSlug($slug);
    }
}
