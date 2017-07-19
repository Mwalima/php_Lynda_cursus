@extends('layouts.master')
@extends('includes.sidebar')
@section('sidebar-left')
    <h1>Sign Up!</h1>
    <form class="form-inline" method="POST" action='/register'>
        {{ csrf_field() }}
        <label class="sr-only" for="inlineFormInput" name="username">Username</label>
        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <div class="input-group-addon">name</div>
            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput"
                   placeholder="Your name here!" name="username">
        </div>

        <label class="sr-only" for="inlineFormInputGroup" name="email">Email Address</label>
        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <div class="input-group-addon">@</div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email Address" name="email" required>
        </div>

        <label class="sr-only" for="inlineFormInputGroup" name="password">Password</label>
        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <div class="input-group-addon">password</div>
            <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="password"
                   name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
@stop
{{--{{$users}}--}}
@section('footer')
    <p>&copy; 2017 D&M productions</p>
@stop

