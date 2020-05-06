<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    protected $type=null;
    public function __construct(Type $type){
        $this->type=$type;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_type=$this->type->get();
        return view('backend.type.index')->with('type',$all_type);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'string|required',
            'status'=>'required|in:active,inactive'
        ]);

        
        $data=$request->all();
        // $data['slug']=$this->category->getSlug($request->title);
        // dd($data);
        $this->type->fill($data);
        $status=$this->type->save();
        if($status){
            request()->session()->flash('success','Type successfully added');
        }
        else{
            request()->session()->flash('error','Error while adding type');
        }
        return redirect()->route('type.index');
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
        $this->type=$this->type->find($id);
        if(!$this->type){
            request()->session()->flash('error','Type not found');
            return redirect()->route('type.index');
        }
        return view('backend.type.edit')->with('type_data',$this->type);
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
        $this->type=$this->type->find($id);
        if(!$this->type){
            request()->session()->flash('error','Type not found');
            return redirect()->route('type.index');
        }
        $this->validate($request, [
            'title'=>'string|required',
            'status'=>'required|in:active,inactive'
        ]);

        
        $data=$request->all();
        // $data['slug']=$this->category->getSlug($request->title);
        // dd($data);
        $this->type->fill($data);
        $status=$this->type->save();
        if($status){
            request()->session()->flash('success','Type successfully added');
        }
        else{
            request()->session()->flash('error','Error while adding type');
        }
        return redirect()->route('type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->type=$this->type->find($id);
        if(!$this->type){
            request()->session()->flash('error','type not found');
            return redirect()->route('type.index');
        }
        $del=$this->type->delete();
        if($del){
            request()->session()->flash('success','Type successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting type');
        }
        return redirect()->route('type.index');
    }
}
