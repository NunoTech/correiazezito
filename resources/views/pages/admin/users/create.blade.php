@extends('adminlte::page')

@section('title', 'Lista de postagens')


@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ request()->segment(1) }}</a></li>
            <li class="breadcrumb-item"><a href="#">{{ request()->segment(2) }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ request()->segment(3) }}</li>
        </ol>
    </nav>

@stop

@section('content')
    <div class="col-8">
    <form method="post" action="{{route('user.store')}}">
        @include('pages.admin.users._partials.form')
        <div class="row">
              <span class="col-12 mr-0">
                    <button type="submit" class="btn btn-success float-right">CADASTRAR</button>
                </span>
        </div>
    </form>
    </div>


@stop

@section('js')

    <script>
        let cep = document.querySelector("#cep");
        let street = document.querySelector("#street")
        let district = document.querySelector("#district")
        let city = document.querySelector("#city")
        let state = document.querySelector("#state")
        cep.addEventListener('keyup', ()=>{
            if (cep.value.length == 8) {

                fetch('/admin/cep/' + cep.value, {
                    method: 'GET',
                    dataType: 'json',
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                    }
                })
                .then(response => response.json())
                .then(data => {
                    street.value = data.logradouro
                    district.value = data.bairro
                    city.value = data.localidade
                    state.value = data.uf
                })
            }
        })
    </script>

@stop

