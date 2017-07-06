@extends('layouts.master')
@extends('includes.sidebar')
@section('sidebar-left')
    <form action="/paint_form" method = "get">
        <input type="hidden">
        {{ csrf_field() }}
        Dit is een form die door middel van middel ware wordt gecontrleerd voordat er een volgende actie plaats vindt
        Raad het request woord:('paintings')<input type="text" name="title" value="">
        {!! $title !!}
        <input type="submit" value="verzenden">
    </form>
@stop
@section('sidebar-right')

@stop
@section('footer')
    <p>&copy; 2017 D&M productions</p>
@stop



