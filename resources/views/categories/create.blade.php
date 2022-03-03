@extends('layouts.adminlayout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Create New Category') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                        @csrf

                        <x-form.input name="name"/>
                        <x-form.input name="slug"/>
                        <x-form.textarea name="desc"/> 

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Category') }}
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