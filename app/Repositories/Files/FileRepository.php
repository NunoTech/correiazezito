<?php


namespace App\Repositories\Files;


use App\Models\Img;
use App\Repositories\BaseRepository;


class FileRepository extends BaseRepository implements FileRepositoryInterface
{
    protected $model;
    public function __construct(Img  $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function save($attributes)
    {
        return parent::create($attributes);
    }
}
