@extends('pages.blog.master.master')
@section('title', 'Blog do Vereador Correia Zezito | Vereador de Feira de Santana - Bahia')
@section('metasTag')
    <meta name="Title" content="Site do Vereador Correia Zezito | Vereador de Feira de Santana - Bahia">
    <meta name="Subject" content="Fique sabendo de todas ações do mandato do vereador Correia Zezito">
    <meta name="description" content="Aqui você fica informado de todas as ações do mandato de Correia Zezito">
@endsection
@section('content')


    <div class="col-12">
        <div class="row">
            <div class="col-12 mt-3">
            <form>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="O que procura?" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success" id="basic-addon2">Pesquisar</button>
                    </div>
                </div>
            </form>
            </div>
            @foreach($posts as $postagem )

            <div class="mt-3 col-12 col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="iconbox-blue bg-light">
                    @foreach($postagem->imgs as $img)

                    <img width="100%" class="rounded-top d-none d-sm-none d-md-block d-lg-block d-xl-block"
                         src="{{ url('storage/'.$img->desktop) }}">
                    <img width="100%" class=" rounded-top d-block d-sm-block d-md-none d-lg-none d-xl-none"
                         src="{{ url('storage/'.$img->mobile) }}">

                    @endforeach

                    <div class="p-1 title-subtitle">
                        <h5 class="p-2">
                            <a href="{{ route('show.blog', $postagem->slug) }}" class="text-success">{{ $postagem->title }}</a>
                        </h5>
                        <p class="p-2">{{ $postagem->subtitle }}</p>
                    </div>
                </div>
            </div>

        @endforeach
        </div>

    </div>


@endsection
