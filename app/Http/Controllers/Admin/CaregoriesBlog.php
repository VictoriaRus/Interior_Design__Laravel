<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caregories_blog;
use Illuminate\Http\Request;

class CaregoriesBlog extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index() 
    {
        $categories = Caregories_blog::orderBy('created_at','desc')->get();

        return view('admin.category.index',[
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $new_category = new Caregories_blog();
        $new_category->title = $request->title;
        $new_category->save();

        return redirect()->back()->withSuccess('Категория была успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caregories_blog  $caregories_blog
     * @return \Illuminate\Http\Response
     */
    public function show(Caregories_blog $caregories_blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caregories_blog  $caregories_blog
     * @return \Illuminate\Http\Response
     */
  
    public function edit(Caregories_blog $caregories_blog, $id)
    {
        $caregories_blog = Caregories_blog::find($id);
        return view('admin.category.edit',[
            'caregories_blog' => $caregories_blog
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caregories_blog  $caregories_blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caregories_blog $caregories_blog, $id)
    {
        $caregories_blog = Caregories_blog::find($id);
        $caregories_blog->title = $request ->title;
        $caregories_blog->save();

        return redirect()->back()->withSuccess('Категория была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caregories_blog  $caregories_blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caregories_blog $caregories_blog, $id)
    {
        $caregories_blog = Caregories_blog::find($id);
        $caregories_blog->delete();
        return redirect()->back()->withSuccess('Категория была успешно удалена!');
    }
}
