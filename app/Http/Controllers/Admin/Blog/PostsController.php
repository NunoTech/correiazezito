<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Img;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Analytics;
use Intervention\Image\Facades\Image;
use Spatie\Analytics\Period;

class PostsController extends Controller
{

    public function index()
    {

        $posts = Post::orderByDesc('id')->paginate(5);
        return view('pages.admin.pages.blog.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $slug = Str::slug($request->title);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->subtitle = $request->subtitle;
        $post->text = $request->text;
        $post->save();
        if ($request->hasFile('img')) {
            foreach ($request->img as $imagem) {
                if ($imagem->isValid()) {
                    $image = new Img;

                    //-----salva o arquivo no disco *DESKTOP------//
                    $img_desktop_file = $imagem->store('desktop');

                    //atualiza tamanho e pixel da foto salva e subscreve
                    $img_desktop = Image::make(public_path('storage/' . $img_desktop_file));
                    $img_desktop->fit(600, 450)->encode('jpg', '80');
                    $img_desktop->save();
                    //Salva o caminho para salvao no final no banco
                    $image->desktop = $img_desktop_file;


                    //-----salva o arquivo no disco *MOBILE------//

                    $img_mobile_file = $imagem->store('mobile');

                    //atualiza tamanho e pixel da foto salva e subscreve
                    $img_mobile = Image::make(public_path('storage/' . $img_mobile_file));
                    $img_mobile->fit(360, 400)->encode('jpg', '80');
                    $img_mobile->save();
                    //Salva o caminho para salvar no final no banco
                    $image->mobile = $img_mobile_file;

                    //-----salva o arquivo no disco *MINIATURA------//

                    $img_miniatura_file = $imagem->store('miniaturas');

                    //atualiza tamanho e pixel da foto salva e subscreve
                    $img_miniatura = Image::make(public_path('storage/' . $img_miniatura_file));
                    $img_miniatura->fit(250, 250)->encode('jpg', '80');
                    $img_miniatura->save();
                    //Salva o caminho para salvao no final no banco
                    $image->miniatura = $img_miniatura_file;

                    //SALVA TODOS OS CAMINHOS

                    $image->post_id = $post->id;

                    $image->save();
                    if (isset($image)) {
                        unset($image);
                    }


                }
            }
        }
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {

    }

    public
    function edit($id)
    {
        $post = Post::find($id);
        return view('pages.admin.pages.blog.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {

        $slug = Str::slug($request->title);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = $slug;
        $post->subtitle = $request->subtitle;
        $post->text = $request->text;
        $post->save();

        //$ima = Img::where('post_id', $post->id)->get();

        // $exists = Storage::disk('s3')->exists('file.jpg');

        if ($request->hasFile('img')) {
            $imgs_antiga = Img::where('post_id', $post->id)->get();
            foreach ($imgs_antiga as $img_antiga) {
                $img_antiga->delete();
                $exist = Storage::disk('public')->exists($img_antiga->path);
                if ($exist) {
                    Storage::delete($img_antiga->path);
                }

            }
            foreach ($request->img as $imagem) {
                $image = new Img;
                //-----salva o arquivo no disco *DESKTOP------//
                $img_desktop_file = $imagem->store('desktop');

                //atualiza tamanho e pixel da foto salva e subscreve
                $img_desktop = Image::make(public_path('storage/' . $img_desktop_file));
                $img_desktop->fit(600, 450)->encode('jpg', '80');
                $img_desktop->save();
                //Salva o caminho para salvao no final no banco
                $image->desktop = $img_desktop_file;


                //-----salva o arquivo no disco *MOBILE------//

                $img_mobile_file = $imagem->store('mobile');

                //atualiza tamanho e pixel da foto salva e subscreve
                $img_mobile = Image::make(public_path('storage/' . $img_mobile_file));
                $img_mobile->fit(360, 400)->encode('jpg', '80');
                $img_mobile->save();
                //Salva o caminho para salvar no final no banco
                $image->mobile = $img_mobile_file;

                //-----salva o arquivo no disco *MINIATURA------//

                $img_miniatura_file = $imagem->store('miniaturas');

                //atualiza tamanho e pixel da foto salva e subscreve
                $img_miniatura = Image::make(public_path('storage/' . $img_miniatura_file));
                $img_miniatura->fit(250, 250)->encode('jpg', '80');
                $img_miniatura->save();
                //Salva o caminho para salvao no final no banco
                $image->miniatura = $img_miniatura_file;

                //SALVA TODOS OS CAMINHOS

                $image->post_id = $post->id;

                $image->save();
                if (isset($image)) {
                    unset($image);
                }
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
