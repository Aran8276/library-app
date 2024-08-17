<?php

namespace App\Http\Controllers\Auth;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    public function action(RegisterRequest $request)
    {
        $data = array(
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        );

        $operation = UserModel::create($data);

        if ($operation) {
            $user = UserModel::getUserByEmail($data['email']);
            Auth::login($user);
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat akun. Coba lagi nanti atau hubungi administrator.');
        }
    }
    // https://sekawanmedia.notion.site/Controller-084de753f3be457cb1e5db5e1e1633ac
    // Challenge Praktikum Status: SELESAI
    // Kesimpulan: VC: C: Controller itu bisa dipanggil dari route URI (localhost:8000/auth/login), terus si controller manggil method yang bisa ngeluarin V: view/frontend utk yang bisa ada datanya dari backend 
    // public function action(LoginRequest $request)
    // {
    //     $validator = Validator::make($request->all(), array(
    //         'firstName' => 'required|max:150',
    //         'lastName' => 'required|max:150',
    //         'username' => 'required|max:150',
    //         'email' => 'required|max:150',
    //         'password' => 'required|max:150'
    //     ));

    //     if ($validator->fails()) {
    //         return back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     $firstName = $request->firstName;
    //     $lastName = $request->lastName;
    //     $username = $request->username;
    //     $email = $request->email;
    //     $password = $request->password;

    //     return redirect('/');

    // Returning menggunakan blade view yang kita buat di `resources/views` dengan Tailwindcss, dengan "mentransfer" variable ke view tsb
    // return view('welcome', compact('firstName', 'lastName', 'username', 'email', 'password'));

    // Returning menggunakan view html basic manual yang dibuat di controller. (Percobaan pertama)
    // return
    //     "
    // <h1>Login Berhasil</h1>
    // <h2>Inputan Anda:</h2>
    // <p>Nama Depan: {$request->firstName}</p>
    // <p>Nama Belakang: {$request->lastName}</p>
    // <p>Nama Pengguna: {$request->username}</p>
    // <p>Email: {$request->email}</p>
    // <span>Kata Sandi: </span>
    // <label for=cb>Lihat</label>
    // <input type='checkbox' style='display: none' id=cb checked>
    // <div>
    //     <p>{$request->password}</p>
    // </div>
    // <style>
    //     input:checked + div { display: none; }
    // </style>

    //         ";
    // }
}
