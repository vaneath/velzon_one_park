<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  // enum of gender

  const GENDER = [
    'male' => 1,
    'female' => 2,
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'user_id',
    'first_name',
    'last_name',
    'gender',
    'position_id',
    'department_id',
    'role',
    'joined_at',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'password' => 'hashed',
  ];

  // get seniority of employee with year.months.days
  public function getSeniorityAttribute()
  {
    $joinedAt = Carbon::parse($this->joined_at);
    $now = Carbon::now();
    return $joinedAt->diff($now)->format('%y years %m months %d days');
  }

  public function position()
  {
    return $this->belongsTo(Position::class);
  }
}
