<?php


namespace App\Services\Files;


interface FileServiceInterface
{
    public function upload($request);
    public function save($postId, $imgPathTemp);
    public function delete($id);

}
