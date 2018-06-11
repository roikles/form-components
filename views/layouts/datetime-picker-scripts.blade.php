@extends('form::layouts.scripts')

@section('js')
@parent
    <script type="text/javascript" src="{{ asset('js/bootstrap/js/transition.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap/js/collapse.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
@stop
