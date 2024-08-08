<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Number;

class MainController extends Controller
{
    public function index() {
        return view('home');
    }

    public function contacts() {
        return view('contacts');
    }

    

    public function gallery() {
        $images = Gallery::all();
        
        return view('gallery', compact('images'));
    }

    public function index_adm() {
        return view('adm.main');
    }
}
