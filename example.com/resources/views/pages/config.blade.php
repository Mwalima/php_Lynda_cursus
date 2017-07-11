@extends('layouts.master')
@extends('includes.sidebar')
@section('sidebar-left')
@stop
@section('sidebar-right')

@stop
@section('content')
    @php phpinfo(); @endphp
    @stop
@section('footer')
    <p>&copy; 2017 D&M productions</p>
@stop