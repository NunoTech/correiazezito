<?php

namespace App\Http\Controllers;


use App\Mail\SendEmail;
use App\Models\Post;
use App\Models\Section;
use Illuminate\Http\Request;


class SiteController extends Controller
{
    public function index()
    {
        $sections = Section::orderByDesc('position')->where('status', '1')->get();
        $posts = Post::orderByDesc('id')->take('3')->with('imgs')->get();

        return view('pages.site.index', [
            'sections' => $sections,
            'posts' =>$posts
        ]);
    }

    public function mail(Request $request)
    {
        return new SendEmail($request->all());
    }

}
