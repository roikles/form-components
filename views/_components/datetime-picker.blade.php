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
        $(document).ready(function () {
            $('#datetimepicker1').flatpickr({
                dateFormat: 'Y-n-j',
                defaultHour: 3,
                defaultMinute: 33,
                enableTime: true,
                weekNumbers: true
            });
        });
    </script>
    <div class='input-group date' id='datetimepicker1'>
        <input type='text' class="form-control" />
    </div>


    <div class="row">
        <div id="datetimepicker" class="form-group input-group">
            <input
                    class="form-control"
                    type="text"
                    name="{{ $name }}"
                    value="{{ $value }}"
                    @include('form::_components.attributes')
            >
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>

@overwrite
