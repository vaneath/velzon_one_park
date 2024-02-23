<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLeave extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'annual_leave',
        'annual_leave_half',
        'accidental_leave',
        'sick_leave',
        'special_leave',
        'unpaid_leave',
        'maternity_leave',
        'compenstate_leave',
    ];
}
