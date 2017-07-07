@extends('layouts.master')
@section('header')
@section('sidebar-up')
  <h1>Verder met je test</h1>
  <p class="lead"> log in om verder te gaan met je test of instellingen te wijzigen</p>
@stop
@section('content')
  <h1>Login</h1>
  {{ Form::open(array('url' => 'test')) }}

  {{Form::label('username', 'Username')}}
  {{Form::text('username')}}

  {{Form::label('password', 'password')}}
  {{Form::password('password')}}

  {{Form::submit('Sign Up')}}

  {{Form::close()}}
@stop
@section('footer')
  <p>&copy; 2017 D&M productions</p>
@stop
