<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->user()->id;
        return view('blogs.index' , [
            'blogs' => Blog::where('user_id' , $user)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validated = request()->validate([
            'title' => 'required',
            'slug' => 'required',
            'desc' => 'required',
            'thumbnail' => ['required','image']
        ]);
        $validated['thumbnails'] = request()->file('thumbnail')->store('thumbnails');
        $validated['user_id'] = Auth::user()->id;
        Blog::create($validated);
        return redirect('/blogs')->with('message' , 'Blogs created successfully.');
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
    public function edit(Blog $blog)
    {
        return view('blogs.edit' , [
            'blog' => $blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Blog $blog)
    {
        $validated = request()->validate([
            'title' => 'required',
            'slug' => ['required','unique:blogs,slug,' . $blog->id],
            'desc' => 'required',
        ]);
        
        if ($blog->thumbnails){
            $validated['thumbnails'] = request()->file('thumbnail')->store('thumbnails');
        }
        $blog->update($validated);
        return redirect('/blogs')->with('message' , 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('blogs')->with('message' , 'Blog deleted successfully.');
    }

    public function detail(Blog $blog){

        return view('blogs.details' , [
            'blog' => $blog,
        ]);
    }
}
