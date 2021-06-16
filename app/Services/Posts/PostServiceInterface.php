<?php


namespace App\Services\Posts;


interface PostServiceInterface
{
    public function get();
    public function getBySlug($slug);
    public function getPaginate($paginate = null);
    public function store($attributes);
    public function update($attributes, $slug);


}
