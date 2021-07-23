<?php


namespace App\Services\Users;


use App\Repositories\Users\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UsersService implements UsersServiceInterface
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create($attributes)
    {
        $attributes['password'] = Hash::make($attributes['password']);
        $user = $this->userRepository->create($attributes);
        $this->delete($user->id); // retirar depois de criar os dados
    }
    public function delete($id)
    {
       $this->userRepository->delete($id);
    }
}
