<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
class FrontendController extends Controller
{
    protected $category=null;
    public function __construct(Category $category){
        $this->category=$category;
    }
    public function home(){
        // $all_category=$this->category->getCategoryWithAttr();
        // dd($all_category);
        $all_category = Category::where('status', 'active')->with('post')->get();
        return view('frontend.index')->with('categories',$all_category);
    }
}