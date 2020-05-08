<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTab extends Model
{
    protected $fillable=['post_id','tab_id', 'tab_type','parameter','description','title','snippet'];

    public static function getData($post_id, $tab_id)
    {
    	$data = PostTab::where('post_id', $post_id)->where('tab_id', $tab_id)->get();
    	return $data;
    }
}