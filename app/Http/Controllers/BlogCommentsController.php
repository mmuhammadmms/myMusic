<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogCommentsController extends Controller
{
    public function store(Blog $blog){
      

        request()->validate([
            'body' => ['required'],
        ]);

        $blog->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request()->body,
        ]);

        return back();
    }
}
