<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SiteController extends Controller
{
   public  function index(Request $request)
   {
      $categories=Category::all();
      $posts=Post::query();
        $searchedCategory=null;
        if($request->get('category'))
        {
         $searchedCategory=Category::where('name',$request->get('category'))->first();
         $posts=$posts->where('cat_id',$searchedCategory->id);
        }
        if($request->picture=='on')
        {
           $posts=$posts->where('file','!=','');
        }
        $posts=$posts->get();
      
      return view('site.boot',compact('categories','posts','searchedCategory'));
   }

   

}
