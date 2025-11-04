<?php

  namespace Database\Factories;

  use App\Models\Activity;
  use Illuminate\Database\Eloquent\Factories\Factory;

  /**
   * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
   */
  class ActivityFactory extends Factory
  {
    public function definition(): array
    {
      return [
        'name' => fake()->name(),
        'parent_id' => null,
      ];
    }

    public function name($name): static
    {
      return $this->state(fn(array $attributes) => [
        'name' => $name
      ]);
    }

    public function parent($id): static
    {
      return $this->state(fn(array $attributes) => [
        'parent_id' => $id
      ]);
    }
  }
