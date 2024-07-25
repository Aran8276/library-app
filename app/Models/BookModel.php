<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    use HasFactory;
    protected $table = 'books'; //nama table yang digunakan
    protected $primaryKey = 'book_id';  //primary key unik
    protected $fillable = array(
        'book_id',
        'book_name',
        'book_description',
        'book_author_id',
        'book_cover_src',
        'book_content_1',
        'book_content_2',
        'created_at',
        'updated_at'
    ); //dapat diisi
    protected $casts = array(
        'book_id' => 'string',
    ); //casting tipe data (merubah tipe data)

}
