@props(['name' , 'type' => 'text' ])

<div class="row mb-3">
    
    <x-form.label name="{{ $name }}"/>
    <x-form.field>
        <input id="{{ $name }}" type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" required autocomplete="name" autofocus
        {{ $attributes(['value' => old($name)]) }}
        >
        
       

        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror   
    </x-form.field>
</div>