@extends('layouts.adminlayout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Update Blogs') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="/blogs/{{ $blog->id }}" enctype="multipart/form-data">
                        @csrf  
                        @method('PATCH')

                        <x-form.input name="title" value="{{ $blog->title }}"/>
                        <x-form.input name="slug" value="{{ $blog->slug }}"/>
                            <img src="{{ asset('storage/' . $blog->thumbnails) }}" class="rounded mx-auto d-block mb-2" style="width:100px"alt="">
                        <x-form.input name="thumbnail" type="file"/> 
                        <x-form.textarea name="desc" value="{{ $blog->desc }}"/> 

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Blogs') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <form action="/blogs/{{ $blog->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="row mb-0 mt-2">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-danger">
                                {{ __('Delete Blogs') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  @endsection