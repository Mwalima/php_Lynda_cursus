@extends('layouts.master')
@extends('includes.sidebar')
@section('sidebar-left')
    <h1>Logout</h1>
        <p> You have succesfully logged out.<a href="{{URL::to('/login')}}">Log in</a></p>
        @stop
        @section('sidebar-right')

        @stop
        @section('footer')
            <p>&copy; 2017 D&M productions</p>
@stop