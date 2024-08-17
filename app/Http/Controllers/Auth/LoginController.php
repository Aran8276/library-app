<?php

namespace App\Http\Controllers\Auth;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function action(LoginRequest $request)
    {
        $credentials = array(
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'is_remember' => $request->input('remember')
        );

        $user = UserModel::getUserByUsername($credentials['username']);

        if ($user && Hash::check($credentials['password'], $user->password)) {

            if ($credentials['is_remember'] == 'on') {
                Auth::login($user, $remember = true);
                return redirect('/');
            }
            Auth::login($user);
            return redirect('/');
        }

        return redirect()->back()->with('error', 'Email atau kata sandi salah.');
    }
}
