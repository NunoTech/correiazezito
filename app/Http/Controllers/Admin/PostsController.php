<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostsStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;
use App\Services\Posts\PostServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class PostsController extends Controller
{
    private $postService;

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        try {

            $posts = $this->postService->getPaginate(15);

            return view('pages.admin.posts.index', [
                'posts' => $posts
            ]);
        } catch (\Exception $exception) {

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        try {
            return view('pages.admin.posts.create');
        } catch (\Exception $exception) {

        }
    }

    /**
     * @param PostsStoreRequest $request
     * @return \Exception|\Illuminate\Http\RedirectResponse
     *
     */
    public function store(PostsStoreRequest $request)
    {
        $post = $request->validated();
        try {
            $this->postService->store($post);

        } catch (\Exception $exception) {
            return $exception;
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($slug)
    {
       $post = $this->postService->getBySlug($slug);
       return view('pages.admin.posts.edit', [
           'post' => $post
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostUpdateRequest $request, $slug)
    {
        $post = $request->validated();
        $this->postService->update($post, $slug);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
