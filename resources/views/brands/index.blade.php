@extends('layouts.adminlayout')

@section('content')
<h1>Brands</h1>

<a href="{{ route('brands.create') }}" class="float-right btn btn-primary">
    Create new Brands
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
    @foreach ($brands as $brand)
    <tr>
      <td scope="col"><img src="{{ asset('storage/' . $brand->thumbnail) }}" class="rounded" style="width:100px"alt=""></td>
        <td scope="col">{{ $brand->name }}</td>
        <td scope="col">{{ $brand->slug }}</td>
        <td scope="col">{{ $brand->desc }}</td>
       <td scope="col"><a href="{{ route('brands.edit' , $brand->slug) }}">Edit</a></td>
      </tr>
    @endforeach
    
    <tbody>

      
    </tbody>
  </table>
@endsection