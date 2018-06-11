@include('form::layouts.datetime-picker-scripts')

@php
    use PodPoint\FormComponents\FormComponentsServiceProvider;

    $classes['label'] = $classes['label'] ?? FormComponentsServiceProvider::LABEL_DEFAULT_CLASS;
    $classes['input'] = $classes['input'] ?? FormComponentsServiceProvider::INPUT_DEFAULT_CLASS;

    $value = $value ?? '';
    $value = isset($app) ? old($name, $value) : $value;
@endphp

@extends('form::_components.form-group')

@section('label')
    <label class="{{ $classes['label'] }}" for="{{ $name }}">
        {{ $labelText }}
    </label>
    @if(isset($explanation))
        <p class="font-size-sm">{{ $explanation }}</p>
    @endif
@overwrite

@section('input')
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker({format: 'yyyy-mm-dd hh:ii'});
        });
    </script>
    <div class="form-group input-group date">
        <input
            class="{{ $classes['input'] }} form-control"
            type="text"
            id="datetimepicker"
            name="{{ $name }}"
            value="{{ $value }}"
            @include('form::_components.attributes')
        >
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
@overwrite
