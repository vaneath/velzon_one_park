<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    return view('users.index', [
      'users' => User::paginate(10),
    ]);
  }
}
