<?php


namespace App\Services\Caches;



use Illuminate\Support\Facades\Cache;

class CacheService implements CacheServiceInterface
{
    /**
     * @param string $slug
     *
     */
    public function removeCachePerSlug(string $slug)
    {
        Cache::forget('post'.$slug.'CachedKey');
        $this->removeCachePaginate();
        return $this;
    }

    public function removeCachePaginate()
    {
        Cache::forget('pagedCache');
        return $this;
    }

}
