<hr>
<div class="row">
    <div class="col-12">
        <div class="section-title mt-2">
            <h2 class="text-success">Outras notícias</h2>
        </div>
    </div>
</div>
<div class="row">
        @foreach($outras as $noticia)
        <div class="col-12 col-md-3 col-lg-3 col-xl-3 mt-2">
            <div class="card" style="width: 100%">
                <img width="100%" class="d-none rounded-top d-sm-none d-md-block d-lg-block d-xl-block"
                     src="{{ url('storage/'.$noticia->imgs[0]->desktop) }}">
                <img width="100%" class="d-block rounded-top d-sm-block d-md-none d-lg-none d-xl-none"
                     src="{{ url('storage/'.$noticia->imgs[0]->mobile) }}">
                <div class="card-body">
                    <h5 class="card-title title-card text-success">{{$noticia->title}}</h5>
                    <p class="card-text text-card">{{$noticia->subtitle}}</p>
                </div>
                <a href="{{ route('show.blog', $noticia->slug) }}" class="btn btn-block rounded-0 btn-success">LER
                    MATÉRIA</a>
            </div>
        </div>
            <hr>
        @endforeach


</div>


