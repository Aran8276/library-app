<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index($id)
    {
        $data = DB::table('users')
            ->where('id', '=', $id)
            ->first();

        if (!$data) {
            return abort(404);
        }

        $firstName = $data->firstName;
        $lastName = $data->lastName;
        $username = $data->username;
        $description = $data->author_description;
        $src = $data->author_profile_src;

        return view('profile', compact('firstName', 'lastName', 'username', 'description', 'src', 'id'));
    }
}
