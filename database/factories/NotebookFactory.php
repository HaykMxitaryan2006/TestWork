<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notebook>
 */
class NotebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'company' => $this->faker->company,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'date_of_birth' => $this->faker->date,
            'image' => $this->faker->imageUrl,
        ];
    }
}
