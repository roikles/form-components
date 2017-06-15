@extends('components.form.form-group')

@section('label')
    @if(isset($labelText))
        <span class="form__label">{{ $labelText }}</span>
    @endif
@overwrite

@section('input')
    <div class="select-wrapper">
        <select class="form__control" id="{{ $name }}" name="{{ $name }}" {{ isset($disabled) ? 'disabled' : '' }}>
            @foreach ($options as $key => $option)
                <option value="{{ $key }}" {{ $key === old($name, isset($value) ? $value : null) ? 'selected' : '' }}>
                    {{ $option }}
                </option>
            @endforeach
        </select>
    </div>
@overwrite
