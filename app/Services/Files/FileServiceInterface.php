<?php


namespace App\Services\Files;


interface FileServiceInterface
{
    public function upload($request);
    public function save($attributes);
    public function move($attributes);

}
