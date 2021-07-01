<div class="container mt-0" data-aos="fade-up">
    <h2 class="text-success text-center">{{ $sections[0]->name }}</h2>
    <p class="text-left">  {!! $sections[0]->description  !!}</p>
    <div class="section-title">
        <h2 class="text-success">Blog</h2>
        <p>Leia as notícias do mandato.</p>
    </div>

    <div class="row">
        @foreach($posts as $post)

            <div class="col-12 col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="iconbox-blue bg-light">
                    @foreach($post->imgs as $img)
                    <img width="100%" src="{{ url('storage/'.$img->path) }}">
                    @endforeach
                    <div class="p-1 title-subtitle">
                        <h5>
                            <a href="{{ route('show.blog', $post->slug) }}" class="text-success">{{ $post->title }}</a>
                        </h5>
                        <p>{{ $post->subtitle }}</p>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

</div>
