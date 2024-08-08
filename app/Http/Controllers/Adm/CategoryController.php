<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades;
use App\Models\Gallery;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(2);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view ('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $p = $request->file('image')->store('uploads/images');
            //dd($request->all());
        $request->validate(['name'=>'required', 'area'=>'required', 
        'wi-fi'=>'required', 'balcony'=>'required', 
        'no_smoking'=>'required', 'bathroom'=>'required', 
        'washer'=>'required', 'kitchen'=>'required', 
        'conditioner'=>'required', 'heating'=>'required',
        'price'=>'required']);
        //$imgs = Gallery::find($data['image']);
        
        Category::create($request->all());
        //$p->image()->sync($request->image);
        return redirect()->route('categories.index')->with('success', 'категория добавлена');
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact ('category'));
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
        $request->validate(['name'=>'required',]);
        $category = Category::find($id);
        $category -> update($request->all());
        return redirect()->route('categories.index')->with ('success', 'Изменения
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
        Category::destroy($id);
        return redirect()->route('categories.index')->with ('success', 'Категория удалена');
    }
}
