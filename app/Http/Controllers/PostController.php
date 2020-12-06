<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function admin()
    {
        return view('post.admin');
    }
    public function index()
    {
        return view('post.index');
    }
    public function post()
    {
        $posts = Post::paginate(10);
        return view('post.post',compact('posts'));
    }
    public function search(Request $request)
    {
        $key_words = $request->key_words;
        $posts = Post::where('title','LIKE','%'.$key_words.'%')->paginate(10);
        return view('post.post',compact('posts'));
    }
}
