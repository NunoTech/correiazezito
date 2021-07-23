<?php


namespace App\Repositories\Server;


use Illuminate\Support\Facades\Http;

class ServerServices implements ServerServicesInterface
{
    public function getServerById($id)
    {
//        Http::withToken('')->get('https://api.absam.io/v1/cloud-app/listall');
    }
}
