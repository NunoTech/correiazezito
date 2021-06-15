<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Img;
use App\Services\Files\FileServiceInterface;
use Illuminate\Http\Request;

class UploadsController extends Controller
{

    private $uploadService;

    public function __construct(FileServiceInterface $uploadService)
    {
       return $this->uploadService = $uploadService;
    }

    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function upload(Request $request)
    {

        if ($request->hasFile('img')) {
           return $this->uploadService->upload($request);

        }
        return 'erro';

    }
}
