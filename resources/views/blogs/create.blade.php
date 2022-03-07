@extends('layouts.adminlayout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Create New Blogs') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="/blogs" enctype="multipart/form-data">
                        @csrf

                        <x-form.input name="title"/>
                        <x-form.input name="slug"/>
                        <x-form.input name="thumbnail" type="file"/> 
                        <x-form.textarea name="desc"/> 

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Blogs') }}
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