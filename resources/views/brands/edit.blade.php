@extends('layouts.adminlayout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Edit Brand') }}</h1></div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('brands.update' , $brand->slug) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <x-form.input name="name" :value="$brand->name"/>
                        <x-form.input name="slug" :value="$brand->slug"/>
                        @if ($brand->thumbnail)
                        <x-form.field>
                        <img src="{{ asset('storage/' . $brand->thumbnail) }}" class="rounded mx-auto d-block" style="width:100px;height:70px;"alt="">
                        </x-form.field>
                        @endif
                        <x-form.input name="thumbnail" type="file"/> 
                        <x-form.textarea name="desc" value="{{ $brand->desc }}"/> 

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit Brand') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('brands.destroy' , $brand->slug) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="row mb-0 mt-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Delete Brand') }}
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