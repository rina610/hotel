<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;


class UserController extends Controller
{
    public function loginForm(){
        return view('user.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.create');
    }

    public function login(Request $request) {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ])) {
            session()->flash('success', 'Вы авторизованы');
            if (Auth::user()->is_admin) {
                return redirect()->route('adm.index');
            } else {
                return redirect()->route('home');
            } 

        } 
        return redirect()->back()->with('error','Не правильный логин или
        пароль');
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ]);

        $user = User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
            session()->flash('success','Регистрация пройдена');
            Auth::login($user);
        return redirect()->route('home');
    }
}
