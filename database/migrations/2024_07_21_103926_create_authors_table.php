<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Referensi Migration dan Tipe Data: https://laravel.com/docs/11.x/migrations#columns
        Schema::create('authors', function (Blueprint $table) {
            $table->uuid('author_id')->primary();
            $table->string('author_name', 150);
            $table->string('author_username', 150);
            $table->string('author_description', 150)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
