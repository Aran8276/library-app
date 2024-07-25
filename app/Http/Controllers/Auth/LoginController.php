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
        return view('login');
    }

    public function action(LoginRequest $request)
    {
        $credentials = array(
            'email' => $request->input('email'),
            'password' => $request->input('password')
        );

        $user = UserModel::getUserByEmail($credentials['email']);

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect('/');
        }

        return redirect()->back()->with('error', 'Email atau kata sandi salah.');
    }
}
