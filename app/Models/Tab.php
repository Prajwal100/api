<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    protected $fillable=['title','status','type'];

    public function getTypeByTitle($title){
        // debugger();
        return $this->where('id',$title)->pluck('type','id');
    }
}
