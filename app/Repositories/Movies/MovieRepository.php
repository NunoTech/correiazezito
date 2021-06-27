<?php


namespace App\Repositories\Movies;


use App\Models\Movie;
use App\Repositories\BaseRepository;


class MovieRepository extends BaseRepository implements MovieRepositoryInterface
{

    protected $model;

    public function __construct(Movie $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function save($attributes)
    {
     return parent::create($attributes);
    }


}
