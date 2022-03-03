@props(['name' , 'value' => ''])

<div class="row mb-3">
    <x-form.label name="{{ $name }}"/>
    <x-form.field>
    <textarea class="form-control" id="{{ $name }}" name="{{ $name }}" rows="3">{{ $value }}</textarea>
    <x-form.error name="{{ $name }}"/>
    </x-form.field> 
</div>