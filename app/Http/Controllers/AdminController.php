<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $categories=Category::all();
        $posts=Post::all();
        $users=User::all();
        return view('admin.index',compact('categories','posts','users'));
    }
    // public function profile()
    // {
    //     $users=User::all();
    //     $categories=Category::all();
    //     $posts=Post::all();

    //     return view('admin.profile',compact('users','categories','posts'));
    // }
}
