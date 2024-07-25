<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => (string) Str::uuid(),
            'book_name' => fake()->name(),
            'book_description' => fake()->text(50),
            'book_author_id' => fake()->text(30),
            'book_cover_src' => fake()->text(50),
            'book_content_1' => fake()->text(300),
            'book_content_2' => fake()->text(300),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
