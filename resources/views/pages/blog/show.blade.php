@extends('pages.blog.master.master')
@section('title',  $post->title)
@section('metasTag')
    <meta name="Description" content="{{ $post->title  }}">
    <meta name="Subject" content="{{ $post->subtitle  }}">
    <meta name="Title" content="{{ $post->title }}">
    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://www.correiazezito.com.br/blog/{{ $post->slug }}"/>
    <meta property="og:title" content="{{ $post->title }}"/>
    <meta property="og:site_name" content="O Protagonista"/>
    <meta property="og:description" content="{{ $post->subtittle }}"/>
    @if(count($post->imgs) > 0)

    <meta property="og:image"
          content="https://www.correiazezito.com.br/storage/{{$post->imgs[0]->path}}"/>
    @endif
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:alt" content="{{ $post->title }}"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="450"/>
@endsection
@section('content')
    <section class="title container" id="materia">
        <div class="row">
            <div class="col-12 col-md-9">
                <div>
                   <h1 class="text-success"> {{ $post->title }}</h1>

                    @foreach($post->imgs as $img)
                    <figure class="mt-2">
                        <img width="100%" class="rounded-sm d-none d-sm-none d-md-block d-lg-block d-xl-block" src="{{ url('storage/'.$img->path) }}">
                        <img width="100%" class="rounded-sm d-block d-sm-block d-md-none d-lg-none d-xl-none" src="{{ url('storage/'.$img->path) }}">

{{--                        <figcaption>Legenda da imagem"</figcaption>--}}
                    </figure>
                    @endforeach

                    <div class="materia">

                    {!! $post->text !!}
                        @foreach($post->movies as $movie)
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/{{$movie->code}}" class="embed-responsive-item" allowfullscreen=""></iframe>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="like_button_container"></div>
            </div>
            <section id="maisnoticias">
{{--                @include('pages.blog._partials.outras_noticias')--}}
            </section>
        </div>

    </section>

@endsection
