<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandStoreRequest;
use App\Models\Brand;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('brands.index' , compact('brands'));
    }
    
    public function create(){

        return view('brands.create');
    }

    public function store(BrandStoreRequest $request){

        $brand = $request->validated();
        $brand['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        Brand::create($brand);
        return redirect()->route('brands.index')->with('message','Brand Successfully Added.');
    }

    public function edit(Brand $brand){
        return view('brands.edit' , [
            'brand' => $brand,
        ]);
    }

    public function update( Brand $brand){

        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required','unique:brands,slug,'. $brand->id],
            'desc' => ['required', 'string', 'max:255'],
            'thumbnail' => 'required|image',
        ]);
        $brand['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        $brand->update([
            'name' => request()->name,
            'slug' => request()->slug,
            'desc' => request()->desc,
            'thumbnail' => $brand['thumbnail']

        ]);
        return redirect()->route('brands.index')->with('message','Brand Successfully Updated.');
    }

    public function destroy(Brand $brand){
        $brand->delete();
        return redirect()->route('brands.index')->with('message' , 'Brand deleted successfully.');
    }
}
