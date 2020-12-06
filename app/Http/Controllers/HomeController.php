<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }
    public function demo(Request $request)
    {
        // dd($request->input('name'));
        return view('demo');
    }
    public function check(Request $request)
    {
        $data = [
            'slug' => $request->slug,
            'title' => $request->title,
            'content' => $request->content
        ];
        if($data['slug'] == null || $data['title']==null|| $data['content']==null){
            return redirect()->back()->with('message','fail');
        }
        return redirect()->route('home.demodemo')->with('message',$data);

    }
    public function demodemo(Request $request)
    {
        $name = $request->input('name');
        return view('demodemo',compact('name'));
    }
    public function login()
    {
        return view('login');
    }
}
