@extends('layouts.master')
@section('header')
@section('content')
    <article id="mainContent">
      <h1>You have Signd Up!</h1>
      <article class="post">
        <h2>Thanks for registring</h2>
        <p> You`ve registrered {{$theEmail}}</p>
        @stop

        @section('footer')
          <p>&copy; 2017 D&M productions</p>
@stop



