<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $photo = $this->faker->image(storage_path(), 680, 480, null, false);
        return [
            'photo' => $photo,
            'category' => $this->faker->randomElement(['makeup', 'decor', 'photography']),
        ];
    }
}
