<?php


namespace App\Services\Movies;


interface MoviesServiceInterface
{
    public function save($postId, $code);
    public function updateOrCreate($attributes);
    public function delete($movieId);
    public function getById($movieId);


}
