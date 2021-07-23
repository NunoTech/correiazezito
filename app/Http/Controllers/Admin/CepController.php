<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Ceps\CepServices;
use App\Services\Ceps\CepServicesInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CepController extends Controller
{
    protected $cepServices;

    public function __construct(CepServicesInterface $cepServices)
    {
        $this->cepServices = $cepServices;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function index($request)
    {
//        return response()->json($request);
//        $cepValidated = $request->validated();
        return response()->json($this->cepServices->get($request));
    }
}
