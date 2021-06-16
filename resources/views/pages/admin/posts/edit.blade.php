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
    <form method="post" action="{{route('post.update', $post->slug)}}">
        @method('put')

        @include('pages.admin.posts._partials.form')
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">PUBLICAR</button>
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

