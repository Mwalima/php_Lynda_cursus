@extends('layouts.master')
@extends('includes.sidebar')
@section('sidebar-left')

@stop
@section('sidebar-right')
    <div class="phpinfo" style="width:50px">@php phpinfo(); @endphp</div>
@stop
@section('footer')
    <p>&copy; 2017 D&M productions</p>
@stop