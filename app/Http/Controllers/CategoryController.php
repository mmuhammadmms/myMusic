<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index(){

        return view('categories.index', [
            'categories' => Category::all(),
        ]);
    }


    public function create(){
        return view('categories.create');
    }

    public function store(){
        
        $category = request()->validate([
            'name' => ['required'],
            'slug' => ['required','unique:categories,slug'],
            'desc' => ['required']
        ]);

        Category::create($category);
        return redirect()->route('categories.index')->with('message', 'Category added successfully.');
    }

    public function edit(Category $category){

        return view('categories.edit' , [
            'category' => $category,
        ]);
    }

    public function update(Category $category){
        request()->validate([
            'name' => ['required'],
            'slug' => ['required','unique:categories,slug,' . $category->id],
            'desc' => ['required']
        ]);

        $category->update([
            'name' => request()->name,
            'slug' => request()->slug,
            'desc' => request()->desc,
        ]);

        return redirect()->route('categories.index')->with('message' , 'Category updated successfully.');
    }

    public function destroy(Category $category){
        
        $category->delete();

        return redirect()->route('categories.index')->with('message' , 'Category deleted successfully.');
    }
}
