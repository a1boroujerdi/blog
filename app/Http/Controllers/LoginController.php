<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function logout(Request $reques)
    {
        Auth::logout();
        return Redirect::to('/login');


     
    }
}
