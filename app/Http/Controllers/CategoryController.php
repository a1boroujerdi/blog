<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $edit=false;
       $categories=Category::all();
        return view('category.index',compact('edit','categories'));
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
         $category=Category::create([
             'name'=>$request->name,
             'parent_id'=>$request->parent_id ?? 0,
             'subject'=>$request->subject
         ]);

         return redirect(route('category.index'));
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
    public function edit($category)
    {
        $edit=true;
        $category=Category::find($category);
        $parent_id=$category->parent_id;
        $categories=Category::all();
        return view('category.index',compact('category','edit','categories','parent_id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {
       $cat=Category::find($category);
       $cat->name=$request->name;
       $cat->parent_id=$request->parent_id;
       $cat->subject=$request->subject;
       $cat->save();
       return redirect(route('admin'));
    }
       

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $category=Category::find($category);
        $category->delete();
        return redirect(route('admin'));

    }
}
