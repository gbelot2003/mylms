<?php

namespace App\Http\Controllers;
            
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        return View('users.index');                                              
    }
}
