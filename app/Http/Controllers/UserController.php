<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(): Collection
    {
        return User::all();
    }

    public function show(User $user): User
    {
        return $user;
    }
}
