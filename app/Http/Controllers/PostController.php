<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    protected $category=null;
    protected $post=null;

    public function __construct(Category $category,Post $post){
        $this->category=$category;
        $this->post=$post;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_posts=$this->post->getAllPost();
        return view('backend.posts.index')->with('post',$all_posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_cats=$this->category->where('is_parent',1)->get();
        $child_cats=$this->category->where('is_parent',0)->get();
        // dd($child_cats);
        // dd($parent_cats);
        return view('backend.posts.create')
        ->with('child_cats',$child_cats)
        ->with('parent_cats',$parent_cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruls=$this->post->getRules();
        
        $data=$request->all();
        $data['slug']=$this->category->getSlug($request->title);
        // dd($data);
        $this->post->fill($data);
        $status=$this->post->save();
        if($status){
            request()->session()->flash('success','Post successfully added');
        }
        else{
            request()->session()->flash('error','Error while adding post');
        }
        return redirect()->route('post.index');
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
    public function edit($id)
    {
        $this->post=$this->post->find($id);
        if(!$this->post){
            request()->session()->flash('error','Post not found');
            return redirect()->route('post.index');
        }
        $parent_cats=$this->category->where('is_parent',1)->get();
        $child_cats=$this->category->where('is_parent',0)->get();
        return view('backend.posts.edit')
        ->with('child_cats',$child_cats)
        ->with('parent_cats',$parent_cats)
        ->with('post_data',$this->post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->post=$this->post->find($id);
        if(!$this->post){
            request()->session()->flash('error','Post not found');
            return redirect()->route('post.index');
        }
        $ruls=$this->post->getRules();
        
        $data=$request->all();
        // dd($data);
        $this->post->fill($data);
        $status=$this->post->save();
        if($status){
            request()->session()->flash('success','Post successfully updated');
        }
        else{
            request()->session()->flash('error','Error while updating post');
        }
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->post=$this->post->find($id);
        if(!$this->post){
            request()->session()->flash('error','Post not found');
            return redirect()->route('post.index');
        }
        $del=$this->post->delete();
        if($del){
            request()->session()->flash('success','post successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting post');
        }
        return redirect()->route('post.index');
    }
}
