<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['title','slug','status','priority'];

    public function getRules(){
        return[
             'title'=>'string|required',
            'status'=>'required|in:active,inactive',
            'parent_id'=>'nullable|exists:categories,id',
            'is_parent'=>'sometimes|in:1',
        ];
    }

    public function getSlug($str){
        $slug=str_slug($str);
        $exits=$this->where('slug',$slug)->count();
        if($exits>0){
            $slug .=date('Ymdhis').rand(2,100);
        }
        return $slug;
    }
    public function shiftChild($cat_id){
        return $this->whereIn('id',$cat_id)->update(['is_parent'=>1]);
    }

    public function getChildByParentId($id){
        return $this->where('parent_id',$id)->orderBy('title','ASC')->pluck('title','id');
    }

    public function post(){
        return $this->hasMany('App\Models\Post','cat_id','id')->orderBy('priority','ASC');
    }

    public function getCategoryWithAttr(){
        return $this->with('post')->where('status','active')->get();
    }
}
