<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'firstName',
        'lastName',
        'username',
        'author_description',
        'author_profile_src',
        'author_profile_path',
        'email',
        'password',
    ];

    protected $casts = [
        'id' => 'string',
    ];

    protected function casts(): array
    {
        return array(
            'id' => 'string',
            'password' => 'hashed',
        );
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->id = Str::uuid();
        });
    }

    public static function getUserByEmail(string $email)
    {
        $user = self::where('email', $email)->first(); // $user = UserModel::where('email', $email)->first(); (dimana 'self' adalah UserModel (file sendiri))
        return $user;
    }

    public static function getUserByUsername(string $username)
    {
        $user = self::where('username', $username)->first(); // $user = UserModel::where('email', $email)->first(); (dimana 'self' adalah UserModel (file sendiri))
        return $user;
    }

    public function id()
    {
        return $this->getRawOriginal('id');
    }

    public static function updateProfileById(string $id, array $data)
    {
        $user = self::where('id', $id)->first();

        if ($user->author_profile_path) {
            Storage::disk('public')->delete($user->author_profile_path);
        }

        $user->update($data);

        return $user;
    }

    public static function updateProfileByIdNoImgEdt(string $id, array $data)
    {
        $user = self::where('id', $id)->first();

        $user->update($data);

        return $user;
    }
}
