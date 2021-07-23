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
            <td>{{$post->title}}
                <p></p><small>Publicado por: {{$post->user->name}}</small></td>
            </td>
            <td>Otto</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('post.edit', $post->slug)}}" class="btn btn btn-warning">
                        Editar
                    </a>

                    <button type="button" class="btn btn-danger">Excluir</button>

                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@stop
