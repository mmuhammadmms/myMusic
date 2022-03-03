@extends('layouts.adminlayout')

@section('content')
<h1>Users</h1>

<a href="{{ route('users.create') }}" class="float-right btn btn-primary">
    Create new User
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
        <th scope="col">Username</th>
        <th scope="col">name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->username }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td><a href="{{ route('users.edit' , $user->id) }}">Edit</a></td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
@endsection