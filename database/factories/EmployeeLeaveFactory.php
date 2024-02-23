<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeLeave>
 */
class EmployeeLeaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 123,
            'annual_leave' => 0,
            'annual_leave_half' => 0,
            'accidental_leave' => 0,
            'sick_leave' => 0,
            'special_leave' => 0,
            'unpaid_leave' => 0,
            'maternity_leave' => 0,
            'compenstate_leave' => 0,
        ];
    }
}
