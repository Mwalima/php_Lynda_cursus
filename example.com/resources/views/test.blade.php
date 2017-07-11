@extends('layouts.master')
@section('header')
@section('sidebar-up')
    <h1>Tests</h1>
    <p class="lead"></p>
@stop
@section('content')
    {{ csrf_field() }}

    @if(!empty($name))
        welcome back!! {{$name}}
    @endif
    {{--@if(!empty($users))--}}
    {{--<li>--}}
    {{--You have searched for {{$users->username}}--}}
    {{--</li>--}}
    {{--<form method='POST' action="/test">--}}
    {{--{{ csrf_field() }}--}}
    {{--<label>Voer hier het id in</label>--}}
    {{--<input type="text" name="id">--}}
    {{--<button type="submit">find user bij id</button>--}}
    {{--</form>--}}
    {{--@endif--}}

    @include('components.card')
@stop
@section('footer')
    <p>&copy; 2017 D&M productions</p>
@stop
