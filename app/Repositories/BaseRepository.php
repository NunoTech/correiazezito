<?php


namespace App\Repositories;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BaseRepository
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function create($attributes)
    {

        return $this->model->create($attributes);
    }

    public function getBySlug($slug)
    {

        $model = $this->model->with(['imgs', 'movies'])->where('slug', $slug)->first();

        if(!$model){
            throw new ModelNotFoundException();
        }
        return $model;
    }

    public function getById($id)
    {
        $model = $this->model->find($id);

        if(!$model){
            throw new ModelNotFoundException();
        }
        return $model;
    }

    public function update($attributes, $id)
    {
        $model = $this->model->find($id);

        if(!$model){
            throw new ModelNotFoundException();
        }
        $model->update($attributes);
        return $model;
    }

    public function destroy($id)
    {
        $model = $this->model->find($id);

        if(!$model){
            throw new ModelNotFoundException();
        }
        return $model->delete();
    }

    public function paginate($paginate = null)
    {

       return $this->model->with('imgs')->orderByDesc('id')->paginate($paginate);
    }

    public function updateOrCreate($attributes){
        $model = $this->model->where('slug', $attributes->slug)->first();

        if(!$model){
            throw new ModelNotFoundException();
        }
        $model->updateOrCreate($attributes->all());
        return $model;
    }

}
