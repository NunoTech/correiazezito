<?php


namespace App\Services\Posts;


use App\Models\Movie;
use App\Repositories\Files\FileRepositoryInterface;
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
        $postCache = Cache::remember('post' . $slug . 'CachedKey', 60 * 60, function () use ($slug) {
            return $this->postRepository->getBySlug($slug);
        });
        return $postCache;

    }

    public function getPaginate($paginate = null)
    {
        $postsPageCache = Cache::remember('pagedCache', 60 * 60, function () use ($paginate) {
            return $this->postRepository->getPaginate($paginate);
        });
        return  $postsPageCache;

    }

    public function store($attributes)
    {

        $attributes['slug'] = Str::slug($attributes['title']);

        $post = $this->postRepository->store($attributes);
        $this->fileService->save($post->id, $attributes['img']);
        if (isset($attributes['movie']))
            $this->movieService->save($post);

        $this->cacheService->removeCachePaginate();
        return $this;
    }

    public function update($attributes, $slug)
    {
        $slug = $this->getBySlug($attributes->slug)->slug;
        $this->postRepository->update($attributes, $slug);
        $this->cacheService->removeCachePerSlug($slug);
        return $this;

    }

}
