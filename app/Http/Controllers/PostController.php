<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        $edit=false;
        $categories=Category::all();
        return view('post.index',compact('posts','categories','edit'));
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
        if($request->file)
        {
        $file=$request->file('file');
        $imageName=time().'.'.$file->getClientOriginalExtension();
        $path=public_path('/image');
        $file->move($path,$imageName);
        $request->file='/image/'.$imageName;
        }
        
        $post=Post::create([
            'name'=>$request->name,
            'cat_id'=>$request->cat_id,
             'desc'=>$request->desc,
            //  'file'=>'/image/'.$imageName,
            'file'=>$request->file,
             'price'=>$request->price,  
        ]);
        return redirect(url('/'));
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
    public function edit($post)
    {
        $edit=true;
        $post=Post::find($post);
        $categories=Category::all();
        $cat_id=$post->cat_id;
        return view('post.index',compact('categories','post','edit','cat_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        $post=Post::find($post);
        if($request->hasFile('file'))
        {
            $file=$request->file('file');
            $imageName=time().'.'.$file->getClientOriginalExtension();
            $path=public_path('/image');
            $file->move($path,$imageName);
            $post->file='/image/'.$imageName;

        }
        $post->name=$request->name;
        $post->price=$request->price;
        $post->desc=$request->desc;
        $post->save();
        return redirect(route('admin'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $post=Post::find($post);
        $filepath=public_path($post->file);
        if(File::exists($filepath))
        {
            File::delete($filepath);
        }
        $post->delete();
        return redirect(route('admin'));
    }
}
