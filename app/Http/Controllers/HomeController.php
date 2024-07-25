<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        // CREATE
        // Insert 1 data
        // DB::table('authors')->insert(
        //     [
        //         'author_id' => '87654321',
        //         'author_name' => 'Zahran',
        //         'author_description' => 'Data Pertama'
        //     ]
        // ); //Menambahkan / Meng-insert 1 data row dengan data yang diatas (KOREKSI: Menggunakan Method "->insert" bukan "->create" pada Laravel 11)
        // REFERENSI KOREKSI: https://sekawanmedia.notion.site/Database-f4bbda7a86d74268864ae70ec8e63fcf#96913e7440d14b5e94643d3ce88c810b => https://laravel.com/docs/11.x/queries#insert-statements

        // Insert banyak data (data dalam array dipisahkan oleh koma , )
        // DB::table('authors')->insert([
        //     [
        //         'author_id' => '69420',
        //         'author_name' => 'John Doe',
        //         'author_description' => 'hehe'
        //     ],
        //     [
        //         'author_id' => '69421',
        //         'author_name' => 'MySQL Sangat Jelek Sekali',
        //         'author_description' => 'hehe yes hehe'
        //     ]
        // ]);
        // **KEMUNGKINAN METHOD "->create" DIUPDATE & DIHAPUS DI LARAVEL 11 SEHINGGA HANYA BISA MENGGUNAKAN "->insert" KARENA FUNGSINYA SAMA**


        // READ
        $authors = DB::table('authors')->get(); // List semuanya di table `authors`
        // $authors = DB::table('authors')->where('author_name', 'Zahran')->first(); // Mengambil sebuah row data di table `authors` yang ada nama "Zahran" pada `author_name` 
        // $authors = DB::table('authors')->count(); // Menghitung ada berapa banyak row / data dalam table
        // $authors = DB::table('authors')->max('created_at'); // Nyari data dengan nilai column spesifik yang terbesar (Misal mencari harga buku termahal / tertinggi) 

        // TODO: MEMPELAJARI DASAR INNER JOIN, LEFT JOIN, RIGHT JOIN PADA SQL https://www.youtube.com/watch?v=G3lJAxg1cy8
        // **CATATAN ADA PALING DIBAWAH SCRIPT INI** 

        // Inner Join
        // $authors = DB::table('books')
        //     ->join('authors', 'author_id', '=', 'book_author_id')
        //     ->get();

        // Left Join
        // $authors = DB::table('books')
        //     ->select('authors.author_name', 'books.book_name')
        //     ->leftJoin('authors', 'author_id', '=', 'books.book_author_id')
        //     ->get();

        // Right Join (code sama kayak left join hanya methodnya beda)
        // $authors = DB::table('books')
        //     ->select('authors.author_name', 'books.book_name')
        //     ->rightJoin('authors', 'author_id', '=', 'books.book_author_id')
        //     ->get();

        return dd($authors);  // Read
        // return "Operasi Sukses"; // Create, Update, Delete
    }

    public function requestJson()
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/users");
        $data = $response->json();

        // return $data;
        // return Auth::user();
        // return Auth::user()->getRawOriginal('id');
        // return "requestJson";
    }

    public function requestArray()
    {
        $data = array("array_1", "array_2", "array_3", "array_4", "array_5");

        return response($data)->withHeaders([
            'Content-Type' => 'application/json',
            'X-Header-One' => 'Header Value 1',
        ]);
    }

    public function view()
    {
        return view("hello");
    }

    public function redirect()
    {
        return redirect()->to('/');
    }

    public function envTest()
    {
        return env('DATA_KITA');
    }
}

        
// Bahasa Sendiri
// INNER JOIN: Menggabungkan kolum dari 2 buah tabel (gabung kolum horizontal) dengan mencari / mencocokan sebuah kolum dengan data yang sama persis
// Contoh praktik INNER JOIN: Agar mudah untuk mengelola data jika beberapa data kosong, atau duplikat (misal ada 5 data pada tabel A yang idnya `123`, 2 data yang idnya `234` dan pd tabel B ada 2 data yang idnya `123`, 5 data yang idnya `234`. Jika pakai innerjoin, kedua outputnya jadi 2 (1 idnya 123, 1 idnya 234)). Data yang salah satunya di kedua table kosong, akan dihilangkan
// LEFT JOIN: Inner join tetapi diprioritaskan untuk menampilkan data di table pertama (kiri) jika sebuah data kosong
// RIGHT JOIN: Inner join tetapi diprioritaskan untuk menampilkan data di table kedua (kanan) jika sebuah data kosong

// Summerized by AI
// INNER JOIN: Menggabungkan baris dari dua tabel berdasarkan kondisi yang ditentukan. Hanya baris yang memenuhi kondisi yang akan ditampilkan. Jika ada baris di salah satu tabel yang tidak memenuhi kondisi, baris tersebut tidak akan ditampilkan.
// LEFT JOIN (atau LEFT OUTER JOIN): Menggabungkan baris dari dua tabel dan akan menampilkan semua baris dari tabel pertama (kiri), dan baris yang cocok dari tabel kedua (kanan). Jika tidak ada kecocokan, hasilnya adalah NULL di sisi kanan.
// RIGHT JOIN (atau RIGHT OUTER JOIN): Mirip dengan LEFT JOIN, tetapi akan menampilkan semua baris dari tabel kedua (kanan), dan baris yang cocok dari tabel pertama (kiri). Jika tidak ada kecocokan, hasilnya adalah NULL di sisi kiri.
