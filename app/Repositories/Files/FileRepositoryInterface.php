<?php


namespace App\Repositories\Files;


interface FileRepositoryInterface
{
    public function save($file);
    public function delete($fileId);
}
