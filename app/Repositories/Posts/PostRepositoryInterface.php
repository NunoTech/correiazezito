<?php


namespace App\Repositories\Posts;


interface PostRepositoryInterface
{
    public function getPaginate($paginate = null);
    public function store($attributes);
    public function getBySlug($slug);
    public function update($attributes, $id);
}
