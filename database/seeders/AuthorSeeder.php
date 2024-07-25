<?php

namespace Database\Seeders;

use App\Models\AuthorModel;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Seeders digunakan untuk membuat dummy data yang kita bisa pakai untuk testing.
     */
    public function run(): void
    {
        // Script berikut akan pasti dijalankan jika migrasi terjadi (`php artisan migrate`) (setelah memodifikasi code pada `DatabaseSeeder.php`):
        /*
        $this->call([
            AuthorSeeder::class
        ]);
        */
        // DB::table('authors')->insert([
        //     [
        //         'author_id' => (string) Str::uuid(),
        //         'author_name' => 'Tere Liye',
        //         'author_description' => 'Tere Liye book authors',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ],
        //     [
        //         'author_id' => (string) Str::uuid(),
        //         'author_name' => 'Raditya Dika',
        //         'author_description' => 'Raditya Dika book authors',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ],
        // ]);
        // // membuat 5 data dummy
        // AuthorModel::factory()->count(5)->create();
    }
}
