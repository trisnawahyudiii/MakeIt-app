<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "home",
            "heading" => "Graphic resources for everyone",
            "posts" => Post::latest()->get()
        ]);
    }
   
}
