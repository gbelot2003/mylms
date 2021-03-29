<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);
        return View('users.index', compact('users'));
    }
}
