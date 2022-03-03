@extends('layouts.adminlayout')

@section('content')
<h1>Categories</h1>

<a href="{{ route('categories.create') }}" class="float-right btn btn-primary">
    Create new Category
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
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Slug</th>
        <th scope="col">Desc</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($categories as $category)
    <tr>
        <td scope="col">{{ $category->id }}</td>
      <td scope="col">{{ $category->name }}</td>
        <td scope="col">{{ $category->slug }}</td>
        <td scope="col">{{ $category->desc }}</td>
       <td scope="col"><a href="{{ route('categories.edit' , $category->slug) }}">Edit</a></td>
      </tr>
    @endforeach
    
    <tbody>

      
    </tbody>
  </table>
@endsection