<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class UserController extends Controller
{
    public function index(User $user)
    {
        return Blade::render('welcome', [
            'data' => $user->paginate(5)
        ]);
    }

    public function create() {
        return Blade::render('user.create');
    }
}
