<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('products.index' , [
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create',[
            'brands' => Brand::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        //dd($request->validated());
        $product = $request->validated();
        $product['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Product::create($product);
        return redirect()->route('products.index')->with('message', 'Product added successfully.');

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
    public function edit(Product $product)
    {
        return view('products.edit' , [
            'product' => $product,
            'brands' => Brand::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product)
    {
        $validated = request()->validate([
            'name' => ['required'],
            'slug' => ['required' , 'unique:products,slug,' . $product->id],
            'desc' => ['required'],
            'price' => ['required'],
            'thumbnail' => 'required|image',
            'quantity' => ['required'],
            'brand_id' => ['required'],
            'category_id' => ['required'],
        ]);
        $validated['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        $product->update($validated);
        return redirect()->route('products.index')->with('message', 'Products updated sucessfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('message' , 'Products deleted successfully.');
    
    }
}
