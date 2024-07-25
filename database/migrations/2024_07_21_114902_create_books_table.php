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
        Schema::create('books', function (Blueprint $table) {
            $table->uuid('book_id')->primary();
            $table->string('book_name', 150);
            $table->longText('book_description')->nullable(true);
            $table->string('book_author_id', 150);
            $table->string('book_cover_src', 150);
            $table->longText('book_content_1')->nullable(true);
            $table->longText('book_content_2')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
