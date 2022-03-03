@extends('layouts.adminlayout')

@section('content')
<h1>Products</h1>

<a href="{{ route('products.create') }}" class="float-right btn btn-primary">
    Create new Product
   </a>
<div class="row mt-3">
    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
      </div> 
    @endif
    
    
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Picture</th>
        <th scope="col">Name</th>
        <th scope="col">Slug</th>
        <th scope="col">Desc</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($products as $product)
    <tr>
      <td scope="col"><img src="{{ asset('storage/' . $product->thumbnail) }}" class="rounded" style="width:100px"alt=""></td>
        <td scope="col">{{ $product->name }}</td>
        <td scope="col">{{ $product->slug }}</td>
        <td scope="col">{{ $product->desc }}</td>
       <td scope="col"><a href="{{ route('products.edit' , $product->slug) }}">Edit</a></td>
      </tr>
    @endforeach
    
    <tbody>

      
    </tbody>
  </table>
@endsection