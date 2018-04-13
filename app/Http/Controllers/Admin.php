<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Admin extends Controller
{
    public function Login()
    {
        return view('login');
    }
    public function LogOut()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function LoginPost(Request $request)
    {
        if (Auth::attempt(['name' => $request->input('login'), 'password' => $request->input('password')]))
        {
            return redirect()->route('ShowAll');
        }
        return redirect()->back();
    }
    public function GeneratePost(Request $request)
    {
        $user = new User();
        $user->name = $request->input('login');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return $user->name."  ".$user->password;
    }
    public function Generate()
    {


        return view('generate');
    }


}
