@extends('layouts.adminlayout')

@section('content')
<div class="container">
    @if (auth()->user()->can('admin'))
    <h1>Admin Page</h1>
    @else
    <h1>Member Page</h1>
    @endif
    
</div>
@endsection
