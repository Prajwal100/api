<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tab;

class TabController extends Controller
{
    protected $tab=null;
    public function __construct(Tab $tab){
        $this->tab=$tab;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_tabs=$this->tab->get();
        return view('backend.tab.index')->with('tab',$all_tabs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'title'=>'string|required',
            'status'=>'required|in:active,inactive',
            'type'=>'required|in:table,snippet'
        ]);

        
        $data=$request->all();
        // $data['slug']=$this->category->getSlug($request->title);
        // dd($data);
        $this->tab->fill($data);
        $status=$this->tab->save();
        if($status){
            request()->session()->flash('success','Tab successfully added');
        }
        else{
            request()->session()->flash('error','Error while adding tab');
        }
        return redirect()->route('tab.index');
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
        $this->tab=$this->tab->find($id);
        if(!$this->tab){
            request()->session()->flash('error','tab not found');
            return redirect()->route('tab.index');
        }
        return view('backend.tab.edit')->with('tab_data',$this->tab);
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
        $this->tab=$this->tab->find($id);
        if(!$this->tab){
            request()->session()->flash('error','tab not found');
            return redirect()->route('tab.index');
        }
        $this->validate($request, [
            'title'=>'string|required',
            'status'=>'required|in:active,inactive',
            'type'=>'required|in:table,snippet'

        ]);

        
        $data=$request->all();
        // $data['slug']=$this->category->getSlug($request->title);
        // dd($data);
        $this->tab->fill($data);
        $status=$this->tab->save();
        if($status){
            request()->session()->flash('success','Tab successfully updated');
        }
        else{
            request()->session()->flash('error','Error while updating tab');
        }
        return redirect()->route('tab.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->tab=$this->tab->find($id);
        if(!$this->tab){
            request()->session()->flash('error','tab not found');
            return redirect()->route('tab.index');
        }
        $del=$this->tab->delete();
        if($del){
            request()->session()->flash('success','Tab successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting tab');
        }
        return redirect()->route('tab.index');
    }
}
