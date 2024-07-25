<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileImageRequest;
use App\Http\Requests\RegisterRequest;

class SettingsController extends Controller
{
    public function index()
    {
        $data = Auth::user();
        $id = Auth::user()->getRawOriginal('id');

        $firstName = $data->firstName;
        $lastName = $data->lastName;
        $username = $data->username;
        $email = $data->email;
        $description = $data->author_description;
        $src = $data->author_profile_src;

        return view('profile-edit', compact('firstName', 'lastName', 'username', 'description', 'email', 'src', 'id'));
    }

    public function updateProfile(EditRequest $request)
    {

        if ($request->file('author_profile_src')) {
            $profileImagePath = $request->file('author_profile_src')->store('profile_images', 'public');
            $data = array(
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'username' => $request->input('username'),
                'author_description' => $request->input('description'),
                'author_profile_src' => ("/storage/" . $profileImagePath),
                'author_profile_path' => $profileImagePath
            );

            $get_raw_id = Auth::user()->getRawOriginal('id');

            $operation = UserModel::updateProfileById($get_raw_id, $data);
        } else {
            $profileImagePath = Auth::user()->author_profile_path;
            $data = array(
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'username' => $request->input('username'),
                'author_description' => $request->input('description'),
                'author_profile_src' => ("/storage/" . $profileImagePath),
                'author_profile_path' => $profileImagePath
            );

            $get_raw_id = Auth::user()->getRawOriginal('id');

            $operation = UserModel::updateProfileByIdNoImgEdt($get_raw_id, $data);
        }


        if ($operation) {
            // return redirect()->back()->with('success', 'Successfully update profile image!');
            return redirect('/user/' . $get_raw_id);
        } else {
            return redirect()->back()->with('failed', 'Gagal mengganti gambar profil!');
        }
    }

    public function deleteProfileImage()
    {
        $profileImagePath = "";
        $data = array(
            'author_profile_src' => ("/storage/" . $profileImagePath),
            'author_profile_path' => $profileImagePath
        );

        $get_raw_id = Auth::user()->getRawOriginal('id');

        $operation = UserModel::updateProfileById($get_raw_id, $data);

        if ($operation) {
            // return redirect()->back()->with('success', 'Successfully update profile image!');
            return redirect()->back()->with('success', '');
        } else {
            return redirect()->back()->with('failed', 'Gagal mengganti gambar profil!');
        }
    }
}

/*
<form action="{{ route('settings.updateProfile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-y-2">
            <input type="file" name="author_profile_src"
                class="file-input file-input-bordered file-input-sm w-full bg-transparent" />
            @error('author_profile_src')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"
        class="px-3 py-2 bg-gray-800 rounded text-sm text-white font-medium block w-full transition-all duration-300">Update Personal Profile</button>
    </div>
</form>
*/