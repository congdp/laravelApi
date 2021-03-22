<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index(){
        $posts = Posts::all();
        // dd($posts) ;
        return view('posts.list' ,compact('posts'));
    }
}
