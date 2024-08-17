<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use App\Models\UserModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BookSubmissionRequest;

class BookController extends Controller
{
    public function index()
    {
        $data = BookModel::all();

        // return dd($data);
        return view('welcome', compact('data'));
    }

    public function show($id)
    {
        $data = BookModel::where('book_id', $id)->first();
        $author_data = UserModel::where('id', $data->book_author_id)->first();
        // return $data->book_id;

        // return $data->book_author_id;
        return view('dynamic.book', compact('data', 'id', 'author_data'));
    }

    public function indexCreate()
    {
        return view('form.book-create');
    }

    public function store(BookSubmissionRequest $request)
    {
        if ($request->file('book_cover_src')) {
            $profileImagePath = $request->file('book_cover_src')->store('profile_images', 'public');
            $author_id = Auth::user()->getRawOriginal('id');
            $id = Str::uuid();
            $data = array(
                'book_id' => $id,
                'book_content_1' => $request->input('bookContent1'),
                'book_content_2' => $request->input('bookContent2'),
                'book_cover_src' => $profileImagePath,                            /// change model book_cover_src db to optional
                'book_name' => $request->input('bookName'),
                'book_description' => $request->input('bookDescription'),
                'book_author_id' => $author_id,
            );
        }

        BookModel::create($data);

        return redirect()->route('home')->with('message', 'Book added successfully!');
    }

    public function search(Request $request)
    {
        $search_query = $request->query('query');

        if ($search_query == '') {
            return redirect()->route('home');
        }

        $data = BookModel::where('book_name', 'like', '%' . $search_query . '%')->get();

        // return response()->json($data);

        return view('dynamic.search', compact('data', 'search_query'));
    }

    public function edit($id)
    {
        $author_id = Auth::user()->getRawOriginal('id');

        if (BookModel::where('book_id', $id)->where('book_author_id', $author_id)->first()) {
            $data = BookModel::where('book_id', $id)->first();
            return view('form.book-edit', compact('data'));
        }
        return abort(404);
    }

    public function update(Request $request)
    {
        $author_id = Auth::user()->getRawOriginal('id');
        $book_id = $request->id;

        if (BookModel::where('book_id', $book_id)->where('book_author_id', $author_id)->first()) {
            $data = array(
                'book_content_1' => $request->input('bookContent1'),
                'book_content_2' => $request->input('bookContent2'),
                'book_name' => $request->input('bookName'),
                'book_description' => $request->input('bookDescription'),
            );

            BookModel::where('book_author_id', $author_id)->first()->update($data);
            return redirect()->route('book.manager')->with('message', 'Book edited successfully!');
        }
        return redirect()->back()->with('failed', 'Book failed to edit!');
    }

    public function delete($id)
    {
        $author_id = Auth::user()->getRawOriginal('id');

        if (BookModel::where('book_id', $id)->where('book_author_id', $author_id)->first()) {
            $book = BookModel::where('book_id', $id)->first();

            if ($book->book_cover_src) {
                Storage::disk('public')->delete($book->book_cover_src);
            }

            $book->delete();
            return redirect()->route('book.manager')->with('message', 'Book deleted successfully!');
        }
        return redirect()->back()->with('failed', 'Book failed to delete!');
    }

    public function indexManager()
    {
        $author_id = Auth::user()->getRawOriginal('id');
        $data = BookModel::where('book_author_id', $author_id)->get();

        return view('users.manager', compact('data'));
    }
}
