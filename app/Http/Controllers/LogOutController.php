<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function action()
    {
        auth()->logout();
        return redirect('/auth/login');
    }
}
