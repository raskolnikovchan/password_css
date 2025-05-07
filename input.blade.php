@props(['id', 'name', 'label', 'type' => 'text', 'model'])

@php
    if ($type == 'password') {
        $value = '';
    } else {
        $value = old($name, $model->$name ?? '');
    }

    // if ($errors->count()) {
    //     dd($errors);
    // }
@endphp

<div>
    <div>
        <label for="{{ $id }}">{{ $label }}</label>
    </div>
    <div>
        <input class="@error($name) error-input @enderror" 
        type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}">
    </div>
    @error($name)
        @foreach ($errors->get($name) as $message)
            <p class="error-message">{{ $message }}</p>
        @endforeach
    @enderror
</div>
