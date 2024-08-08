<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Adm;
use App\Models\Category;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Gallery::all();
        return view('admin.gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = Gallery::all();
        $categories = Category::all();        
        return view ('admin.gallery.create', compact('images', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       
        //dd($data);
        $request->validate(['image'=>'required', 'category_id'=>'required']);
        $data = $request->all(); 

        

        if ($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('uploads/images');
        $tb = Gallery::create($data);
        return redirect()->route('gallery.index')->with('success', 'изображение добавлено');
    }
        }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Gallery::find($id);
        $categories = Category::all();
        return view('admin.gallery.edit', compact ('image', 'categories'));
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
        $request->validate(['category_id'=>'required',]);
        $image = Gallery::find($id);
        $image -> update($request->all());
        return redirect()->route('gallery.index')->with ('success', 'Изменения
        сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gallery::destroy($id);
        return redirect()->route('gallery.index')->with ('success', 'Изображение удалено');
    }
}
