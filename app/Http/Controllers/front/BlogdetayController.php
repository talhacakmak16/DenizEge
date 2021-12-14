<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogdetayController extends Controller
{
 public function index($selflink    )
 {
     $c = Blog::where('selflink','=',$selflink)->count();
     if ($c!=0)
     {
         $w= Blog::where('selflink','=',$selflink)->get();
         return view('front.blogdetay',['data'=>$w]);
     }
     else
     {
         return redirect('/');
     }
 }
}
