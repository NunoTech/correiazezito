<?php

namespace App\Http\Controllers\Admin\Site;

use App\Http\Controllers\Controller;
use App\Models\Departament;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{

    public function index()
    {
        $sections = Section::get();
        return view('pages.admin.pages.site.sections.index',[
            'sections' => $sections
            ]);
    }


    public function create()
    {

        return view('pages.admin.pages.site.sections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $secao = new Section();
        $secao->name = $request->name;
        $secao->description = $request->description;
        $secao->status = $request->status;
        $secao->save();
        return redirect()->route('secao.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departaments = Departament::where('section_id', $id)->get();
        dd($departaments->all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
