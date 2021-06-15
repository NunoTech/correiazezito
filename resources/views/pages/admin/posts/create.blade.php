@extends('adminlte::page')

@section('title', 'Lista de postagens')
@section('css')
    <link href="{{asset('assets/painel/css/filepond.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/painel/css/filepond-plugin-image-preview.css')}}" rel="stylesheet"/>
    <style>
        .ck-editor__editable {
            min-height: 150px !important;
            max-height: auto !important;
        }
    </style>

@stop

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Publicar</li>
        </ol>
    </nav>

@stop

@section('content')
    <form method="post" action="{{route('posts.store')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-12">
                <label for="title">Título</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                       placeholder="Título da postagem" value="{{old('title')}}">

                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-12">
                <label for="subtitle">Subtítulo</label>
                <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle"
                       placeholder="subtítulo da postagem" value="{{old('subtitle')}}">

                @error('subtitle')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <label for="inputAddress2">Texto</label>
                <textarea name="text" id="text" rows="10" class="@error('text') is-invalid @enderror" >{{old('text')}}</textarea>
                @error('text')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="form-row">
                    <div class="col-12 mb-3">
                        <label for="img">Imagem</label>
                        <input type="file" id="img" name="img" class="@error('img') is-invalid @enderror"/>
                        @error('img')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="movie">Vídeo</label>
                        <input type="text" name="movie" class="form-control" id="movie"
                               placeholder="EX: https://www.youtube.com/watch?v=RSKn1wR09rg" value="{{old('movie')}}">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">PUBLICAR</button>
                    </div>
                </div>
            </div>


        </div>

    </form>


@stop

@section('js')
    <script src="{{asset('assets/painel/js/filepond.js')}}"></script>
    <script src="{{asset('assets/painel/js/filepond-plugin-image-preview.js')}}"></script>
    <script src="{{asset('assets/painel/js/ckeditor.js')}}"></script>

    <script>
        ClassicEditor.create(document.querySelector('#text'))
            .then(editor => {
                editor.ui.view.editable.element.style.height = '150px';
            })
            .catch(error => {
                console.error(error);
            });

        FilePond.registerPlugin(FilePondPluginImagePreview);
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');
        // Create a FilePond instance
        const pond = FilePond.create(inputElement);

        FilePond.setOptions({
            server: {
                url: '/admin/upload',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            },
        });
    </script>
@stop

