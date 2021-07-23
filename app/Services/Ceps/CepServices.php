<?php


namespace App\Services\Ceps;


use Illuminate\Support\Facades\Http;

class CepServices implements CepServicesInterface
{
    public function get($cep)
    {

       return Http::get('viacep.com.br/ws/' . $cep . '/json/')->json();

    }
}
