<?php


namespace App\Repositories\Users;


use App\Models\Img;
use App\Repositories\BaseRepository;
use App\Models\User;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;
    public function __construct(User $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function create($attributes)
    {

        return parent::create($attributes);
    }

    public function delete($id)
    {
        parent::destroy($id);
    }

}
