<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthorModel>
 */
class AuthorModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //method fake() adalah data palsu yang diberikan oleh larvel
        return [
            'author_id' => (string) Str::uuid(),
            'author_name' => fake()->name(),
            'author_description' => fake()->text(150),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
