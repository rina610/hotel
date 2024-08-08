<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Number;
use App\Models\Category;
use App\Models\Gallery;

class AdmController extends Controller
{
    public function index() {
        $numbers = Number::all();
        $categories = Category::all();
        $images = Gallery::all();
        return view('admin.index', compact('numbers', 'categories', 'images'));
    }

}
