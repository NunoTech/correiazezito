<?php


namespace App\Repositories\Movies;


interface MovieRepositoryInterface
{
    public function save($attributes);
    public function updateOrCreate($attributes);
    public function delete($movieId);
    public function getById($movieId);

}
