<?php

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\BlogCommentsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index' , [
        'brands' => Brand::all(),
        'categories' => Category::all(),
        'products' => Product::take(6)->latest()->get(),
        'blogs' => Blog::take(6)->latest()->get(),
    ]);
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');



Route::middleware('can:admin')->group(function() {

    Route::resource('users' , UserController::class);

    Route::get('brands' , [BrandController::class,'index'])->name('brands.index');
    Route::get('brands/create' , [BrandController::class, 'create'])->name('brands.create');
    Route::post('brands/store', [BrandController::class , 'store'])->name('brands.store');
    Route::get('brands/{brand:slug}/edit',[BrandController::class , 'edit'])->name('brands.edit');
    Route::put('brands/{brand:slug}',[BrandController::class,'update'])->name('brands.update');
    Route::delete('brands/{brand:slug}',[BrandController::class , 'destroy'])->name('brands.destroy');

    Route::get('categories',[CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create' , [CategoryController::class,'create'])->name('categories.create');
    Route::post('categories',[CategoryController::class , 'store'])->name('categories.store');
    Route::get('categories/{category:slug}/edit' , [CategoryController::class,  'edit'])->name('categories.edit');
    Route::put('categories/{category:slug}' , [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category:slug}' , [CategoryController::class , 'destroy'])->name('categories.destroy');

    Route::get('products', [ProductController::class , 'index'])->name('products.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products',[ProductController::class, 'store'])->name('products.store');
    Route::get('products/{product:slug}/edit' , [ProductController::class , 'edit'])->name('products.edit');
    Route::put('products/{product:slug}' , [ProductController::class , 'update'])->name('products.update');
    Route::delete('products/{product:slug}' , [ProductController::class , 'destroy'])->name('products.destroy');
});

Route::middleware('auth')->group(function() {

    Route::get('blogs' , [BlogController::class , 'index']);
    Route::get('blogs/create' , [BlogController::class , 'create']);
    Route::post('blogs' , [BlogController::class , 'store']);
    Route::get('blogs/{blog:slug}' , [BlogController::class , 'edit']);
    Route::patch('blogs/{blog}' , [BlogController::class , 'update']);
    Route::delete('blogs/{blog}' , [BlogController::class , 'destroy']);
    Route::get('blogs/details/{blog:slug}' , [BlogController::class , 'detail']);
    Route::post('/blogs/{blog:slug}/comments' , [BlogCommentsController::class, 'store']);
});

