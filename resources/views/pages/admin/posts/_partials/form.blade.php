@csrf
<div class="form-row">
    <div class="form-group col-12">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
               placeholder="Título da postagem" value="{{$post->title ?? old('title')}}">

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
               placeholder="subtítulo da postagem" value="{{$post->subtitle ?? old('subtitle')}}">

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
        <textarea name="text" id="text" rows="10" class="@error('text') is-invalid @enderror" >{{$post->text ?? old('text')}}</textarea>
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

        </div>
    </div>


</div>
