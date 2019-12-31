<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Carbon\Carbon;
class BlogController extends Controller
{
    public function list(){
        $list = Blog::all();
        return view('Blog.list', ["blogs"=>$list]);
    }

    public function  create(){
        $entry = Blog::create([
            'content'=>'this is content',
            'title'=>'this is a title',
            'user_id'=>null,
            'published'=>Carbon::now()
        ]); 
        return $entry;
    }

    public function read(Blog $id){
       //$blog = Blog::findOrFail($id);
        return $id->content;
    }

    // public function update(){
    //     return  
    // }

    // public function delete(){
    //     return  
    // }


}
