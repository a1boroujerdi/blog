<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $categories=Category::all();
        $posts=Post::all();
        return view('admin.profile',compact('user','categories','posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $user=User::find($user);
        $categories=Category::all();
        return view('profile.index',compact('user','categories'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
            $user=User::find($user);
            if($request->hasfile('image'))
            {
                $file=$request->file('image');
                $imageName=time().'.'.$file->getClientOriginalExtension();
                $path=public_path('/profile');
                $file->move($path,$imageName);
                $user->image='/profile/'.$imageName;
            }
            $user->name=$request->name;
            $user->desc=$request->desc;
            $user->twitter=$request->twitter;
            $user->facebook=$request->facebook;
            $user->instagram=$request->instagram;
            $user->youtube=$request->youtube;
            $user->save();
            return redirect(url('user'));

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $user=User::find($user);
        $filepath=public_path($user->image);
        if(File::exists($filepath))
        {
            File::delete($filepath);
        }
        $user->delete();
        return redirect(route('admin'));
    }
}
