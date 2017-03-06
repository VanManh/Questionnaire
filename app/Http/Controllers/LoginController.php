<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Surveys;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function getLogin()
    {
        return view('login.login');
    }

    function postLogin(LoginRequest $request)
    {
        $user = Surveys::where('id', '=', 1)->first();
        $name = $user->name;
        echo $name;
    }

    function temp($request)
    {
        $login = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
}
