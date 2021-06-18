<?php


namespace App\Services\Movies;


use App\Repositories\Movies\MovieRepositoryInterface;

class MoviesService implements MoviesServiceInterface
{
    protected $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function create($attributes)
    {
        $this->movieRepository->save($attributes);
    }
}
