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

  @if(!empty($users))
  <li>
  You have searched for {{$users->username}}
  </li>
  <form method='POST' action="/test">
  {{ csrf_field() }}
  <label>Voer hier het id in</label>
  <input type="text" name="id">
  <button type="submit">find user bij id</button>
  </form>
  @endif
@stop
@section('footer')
  <p>&copy; 2017 D&M productions</p>
@stop
