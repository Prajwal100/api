<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','slug','status','cat_id','child_cat_id','description', 'tab_ids'];

    public function getRules(){
        return[
             'title'=>'string|required',
            'status'=>'required|in:active,inactive',
            'description'=>'required|string',
        ];
    }

    public function getSlug($str){
        $slug=str_slug($str);
        $exits=$this->where('slug',$slug)->count();
        if($exits>0){
            $slug .=date('Ymdhis').random(2,100);
        }
        return $slug;
    }
    public function cat_info(){
        return $this->hasOne('App\Models\Category','id','cat_id');
    }
    public function getAllPost(){
        return $this->with('cat_info')->orderBy('id','ASC')->paginate(20);
    }
    public static function getFirstChildSlug($cat_id)
    {
        $data = Post::where('cat_id', $cat_id)->orderBy('id')->first();
        if($data)
        {
            return $data->slug;
        }
        return '';
    }

    
}