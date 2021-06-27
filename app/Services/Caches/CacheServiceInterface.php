<?php


namespace App\Services\Caches;


interface CacheServiceInterface
{
    /**
     * @param string $slug
     * @return mixed
     *
     */
    public function removeCachePerSlug(string $slug);
    public function removeCachePaginate();

}
