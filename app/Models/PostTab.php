<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTab extends Model
{
    protected $fillable=['post_id','tab_id','parameter','description','title','snippet','tab_title','tab_type'];
}
