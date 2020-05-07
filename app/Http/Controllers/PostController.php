<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tab;
use App\Models\PostTab;

class PostController extends Controller
{
    protected $category=null;
    protected $post=null;
    protected $tab=null;
    protected $posttab=null;


    public function __construct(Category $category,Post $post,Tab $tab,PostTab $posttab){
        $this->category=$category;
        $this->post=$post;
        $this->tab=$tab;
        $this->posttab=$posttab;

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
        $parent_cats=$this->category->get();
        // $tabs=$this->tab->get();
        // $child_cats=$this->category->where('is_parent',0)->get();
        // dd($child_cats);
        // dd($parent_cats);
        return view('backend.posts.create')
        // ->with('tabs',$tabs)
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

    public function postTab(){
        $all_post_tab=$this->posttab->get();
        return view('backend.posts.post-tab.post-tab-index')->with('post_tab',$all_post_tab);
    }

    public function postCreate(){
        $tabs=$this->tab->get();
        return view('backend.posts.post-tab.post-tab-create')->with('tabs',$tabs);
    }

    public function postStore(Request $request){
        // dd($request->all());
        $data=$request->all();
        $this->posttab->fill($data);
        $status=$this->posttab->save();
        if($status){
            request()->session()->flash('success','Successfully added');
        }
        else{
            request()->session()->flash('error','Error while adding');
        }
        return redirect()->route('post-tab-manager');
    }

    public function postDelete($id){
        $this->posttab=$this->posttab->find($id);
        if(!$this->posttab){
            request()->session()->flash('error','Not found');
            return redirect()->route('post-tab-manager');
        }
        $del=$this->posttab->delete();
        if($del){
            request()->session()->flash('success','Successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting');
        }
        return redirect()->route('post-tab-manager');
    }


    public function getTabType(Request $request){
        // dd($request->title);
        $this->tab=$this->tab->find($request->id);
        if(!$this->tab){
            return response()->json(['status'=>false,'msg'=>'tab not found','data'=>null]);
        }
        $Tab_type=$this->tab->getTypeByTitle($request->id);
        // dd($Tab_type);
        if($Tab_type->count()<=0){
            return response()->json(['status'=>false,'msg'=>'','data'=>null]); 
        }
        else{
            return response()->json(['status'=>true,'msg'=>'','data'=>$Tab_type]);
        }
    }
}
