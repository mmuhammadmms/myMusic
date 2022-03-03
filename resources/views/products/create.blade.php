@extends('layouts.adminlayout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Create New Products') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <x-form.input name="name"/>
                        <x-form.input name="slug"/>
                        <x-form.input name="price" type="number" />
                        <x-form.input name="quantity" type="number"/>
                        <x-form.input name="thumbnail" type="file"/> 
                        <x-form.textarea name="desc"/> 

                        <div class="row mb-3">
    
                            <x-form.label name="Brand"/>
                            <x-form.field>
                                <select name="brand_id" id="brand_id" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                    <option value="">Select</option>
                                    @foreach ($brands as $brand)
                                     <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>

                                @error('brand_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror   
                            </x-form.field>
                        </div>

                        <div class="row mb-3">
    
                            <x-form.label name="Category"/>
                            <x-form.field>
                                <select name="category_id" id="category_id" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                    <option value="">Select</option>
                                    @foreach ($categories as $category)
                                     <option value="{{  $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror   
                            </x-form.field>
                        </div>



                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Product') }}
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