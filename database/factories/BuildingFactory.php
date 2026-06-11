<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Building>
 */
class BuildingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'name' => null,
          'address' => fake()->address(),
          'latitude' => fake()->latitude(),
          'longitude' => fake()->longitude(),
        ];
    }

  public function withName($name): BuildingFactory|Factory
  {
    return $this->state(fn (array $attributes) => ['name' => $name]);
  }
}
