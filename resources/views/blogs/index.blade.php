@extends('layouts.adminlayout')

@section('content')
<h1>Blogs</h1>

<a href="blogs/create" class="float-right btn btn-primary">
    Create new Blogs
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
        <th scope="col">Title</th>
        <th scope="col">Slug</th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($blogs as $blog)
    <tr>
      <td scope="col"><img src="{{ asset('storage/' . $blog->thumbnails) }}" class="rounded" style="width:100px"alt=""></td>
        <td scope="col">{{ $blog->title }}</td>
        <td scope="col">{{ $blog->slug }}</td>
        <td scope="col">{{ date('d/m/Y', strtotime($blog->created_at)) }}</td>
       <td scope="col"><a href="blogs/{{ $blog->slug }}">Edit</a></td>
      </tr>
    @endforeach
    
    <tbody>

      
    </tbody>
  </table>
@endsection