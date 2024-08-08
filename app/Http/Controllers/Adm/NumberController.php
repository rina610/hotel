<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Number;
use App\Models\Category;
use App\Models\Gallery;


class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numbers = Number::all();
        return view('admin.numbers.index', compact('numbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();        
        return view ('admin.numbers.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['city'=>'required',
        'street'=>'required','build'=>'required','floor'=>'required',
        'number'=>'required','category_id'=>'required',
        'status'=>'required', ]);

        Number::create($request->all());
        return redirect()->route('numbers.index')->with('success', 'Номер добавлен');
    }

    public function prices() {
        $categories = Category::all();
        return view('prices', compact('categories'));
    }

    public function booking(Request $request) {
        $numbers = Number::all();
        $category = Category::find($request['category']);
        $categories = Category::all();
        $images = Gallery::all();
        return view('booking', compact('numbers', 'category', 'images', 'categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $number = Number::find($id);
        return view('admin.numbers.edit', compact ('number'));
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
        $request->validate(['status'=>'required', 'note'=>'required',]);
        $number = Number::find($id);
        $number -> update($request->all());
        return redirect()->route('numbers.index')->with ('success', 'Изменения
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
        Number::destroy($id);
        return redirect()->route('numbers.index')->with ('success', 'Номер удален');
    }


}
