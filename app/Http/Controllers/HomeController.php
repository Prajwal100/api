<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $post=null;
    public function __construct(Post $post)
    {
        $this->middleware('auth');
        $this->post=$post;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route(request()->user()->role);
    }

    public function admin(){
        $all_posts=$this->post->getAllPost();
        return view('backend.index')->with('post',$all_posts);
    }
}
