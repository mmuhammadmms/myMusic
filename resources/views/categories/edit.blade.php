@extends('layouts.adminlayout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Update Category') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('categories.update' , $category->slug) }}" >
                        @csrf
                        @method('PUT')

                        <x-form.input name="name" :value="$category->name"/>
                        <x-form.input name="slug" :value="$category->slug"/>
                        <x-form.textarea name="desc" :value="$category->desc"/> 

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Category') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <form action="{{ route('categories.destroy' , $category->slug) }}" method="post"> 
                        @csrf
                        @method('DELETE')
                        <div class="col-md-6 offset-md-4 pt-5">
                            <button type="submit" class="btn btn-danger">
                                Delete {{ $category->slug }}
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
  @endsection