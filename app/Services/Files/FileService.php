<?php


namespace App\Services\Files;


use App\Repositories\Files\FileRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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

        $path = $file->storeAs('file/' . $folder, Str::slug($fileName) . '.' . $this->validateFileExtension($file));
        $image = Image::make($request->file('img'))->fit(600, 450)->encode('jpg', 60);
        $image->save(storage_path('app/public/' . $path));
        return response()->json($path);
    }


    public function save($postId, $imgPathTemp)
    {
        $file = [
            'post_id' => $postId,
            'path' => Str::replace('\/', '/',substr($imgPathTemp, 1, -1)),
        ];
        $this->fileRepository->save($file);
        return $this;
    }

    /**
     * @param $id
     * @return mixed
     *
     */
    public function delete($id)
    {
        return $this->fileRepository->delete($id);
    }

    /**
     * @param $file
     * @return string
     *
     */
    private function validateFileExtension($file): string
    {
        $fileExtension = $file->extension();

        $fileExtensionAllowed = [
            'png',
            'jpeg',
            'jpg'
        ];

        if (in_array($fileExtension, $fileExtensionAllowed))
            return $fileExtension;
    }
}
