<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RoleEnum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
  /**
   * The current password being used by the factory.
   */
  protected static ?string $password;

  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'user_id' => random_int(100, 999),
      'first_name' => $this->faker->firstName,
      'last_name' => $this->faker->lastName,
      'gender' => random_int(1, 2),
      'role' => random_int(1, 3),
      'department_id' => Department::all()->random()->id,
      'position_id' => Position::all()->random()->id,
      'password' => Hash::make('password'),
      'joined_at' => $this->faker->date(),
      'tel' => $this->faker->numerify('##########'),
    ];
  }
}
