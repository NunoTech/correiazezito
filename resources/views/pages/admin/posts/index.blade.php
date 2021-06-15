@extends('adminlte::page')

@section('title', 'Lista de postagens')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" >
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Posts</li>
        </ol>
    </nav>

@stop

@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Data</th>
            <th scope="col">Título</th>
            <th scope="col">Comentários</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{\Carbon\Carbon::parse($post->created_at)->format('d-m-y H:i')}}</th>
            <td>{{$post->title}}</td>
            <td>Otto</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-warning">Editar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>

                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@stop
