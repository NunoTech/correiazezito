<?php


namespace App\Repositories\Posts;


use App\Repositories\BaseRepository;
use App\Models\Post;


class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    protected $model;

    public function __construct(Post $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getPaginate($paginate = null)
    {
        return parent::paginate($paginate);
    }
    public function store($attributes)
    {
        return parent::create($attributes);
    }

    public function getBySlug($slug)
    {
        return parent::getBySlug($slug);
    }

    public function update($attributes, $id)
    {
        return parent::update($attributes, $id); // TODO: Change the autogenerated stub
    }

}
