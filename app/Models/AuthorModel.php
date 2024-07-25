<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorModel extends Model
{
    use HasFactory;
    protected $table = 'authors'; //nama table yang digunakan
    protected $primaryKey = 'author_id';  //primary key unik
    protected $fillable = array(
        'author_id',
        'author_name',
        'author_description',
        'created_at',
        'updated_at'
    ); //dapat diisi
    protected $casts = array(
        'author_id' => 'string',
    ); //casting tipe data (merubah tipe data)
}
