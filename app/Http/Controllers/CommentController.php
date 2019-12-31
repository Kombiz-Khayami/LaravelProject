<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function create($text){
        return Comment::create([
            "text" => $text 
        ]);
    }

    public function show($id){
        return Comment::findOrFail($id);
    }
}
