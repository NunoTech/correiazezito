<?php


namespace App\Services\Files;


use App\Repositories\Files\FileRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class FileService implements FileServiceInterface
{

    protected $fileRepository;

    public function __construct(FileRepositoryInterface $fileRepository)
    {
        $this->fileRepository = $fileRepository;

    }

    public function upload($request): \Illuminate\Http\JsonResponse
    {
        $file = $request->file('img');
        $fileName = $file->getClientOriginalName();
        $folder = uniqid() . '-' . now()->timestamp;
        $path = $file->storeAs('file/' . $folder, $fileName);
        return response()->json($path);
    }


    public function save($postId, $imgPathTemp)
    {
        $file = [
            'post_id' => $postId,
            'path' => substr($imgPathTemp, 1, -1),
        ];
        $this->fileRepository->save($file);
        return $this;
    }


}
