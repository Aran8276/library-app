<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $data = BookModel::all();
        $user_data = UserModel::all();

        return view('admin.manager-admin', compact('data', 'user_data'));
    }

    public function indexCreate()
    {
        return view('form.book-create');
    }

    public function edit($id)
    {
        if (BookModel::where('book_id', $id)->first()) {
            $data = BookModel::where('book_id', $id)->first();
            return view('admin.book-edit-admin', compact('data'));
        }

        return abort(404);
    }

    public function update(Request $request)
    {
        $book_id = $request->id;

        if (BookModel::where('book_id', $book_id)->first()) {
            $data = array(
                'book_content_1' => $request->input('bookContent1'),
                'book_content_2' => $request->input('bookContent2'),
                'book_name' => $request->input('bookName'),
                'book_description' => $request->input('bookDescription'),
            );

            BookModel::where('book_id', $book_id)->update($data);
            return redirect()->route('admin.index')->with('message', 'Book edited successfully!');
        }

        return redirect()->back()->with('failed', 'Book failed to edit!');
    }

    public function delete($id)
    {
        if (BookModel::where('book_id', $id)->first()) {

            $book = BookModel::where('book_id', $id)->first();

            if ($book->book_cover_src) {
                Storage::disk('public')->delete($book->book_cover_src);
            }

            $book->delete();
            return redirect()->route('book.manager')->with('message', 'Book deleted successfully!');
            return redirect()->route('admin.index')->with('message', 'Book deleted successfully!');
        }
        return redirect()->back()->with('failed', 'Book failed to delete!');
    }
}
