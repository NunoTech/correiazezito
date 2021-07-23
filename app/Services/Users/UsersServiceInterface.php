<?php


namespace App\Services\Users;


interface UsersServiceInterface
{
    public function create($attributes);
    public function delete($id);
}
