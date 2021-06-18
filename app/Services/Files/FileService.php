<?php


namespace App\Services\Files;


use App\Repositories\Files\FileRepositoryInterface;
use Illuminate\Support\Facades\Storage;



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

    public function move($attributes)
    {
        Storage::copy('app/public/' . $attributes['img'], 'app/public/teste' . uniqid() . '-' . now()->timestamp .'jpg');
    }
    public function save($attributes)
    {
      return  $this->fileRepository->save($attributes);
    }


}
