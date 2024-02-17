<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    Department::factory()->count(5)->create();
    Position::factory()->count(10)->create();
    User::factory()->count(30)->create();
    User::factory()->create([
      'user_id' => 123,
      'first_name' => 'V',
      'last_name' => 'A',
      'role' => 1,
      'department_id' => Department::all()->random()->id,
      'position_id' => Position::all()->random()->id,
    ]);
  }
}
