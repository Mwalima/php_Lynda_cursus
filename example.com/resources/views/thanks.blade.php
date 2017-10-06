@extends('layouts.master')
@extends('includes.sidebar')
@section('sidebar-left')
    <h1>You have Signd Up!</h1>
    <h2>Thanks for registring</h2>
    @if (!empty($theEmail))
    <p> You`ve registrered this email adres: <h3>{{$theEmail}}</h3></p>

    @endif
    @if(!empty($accounts))
        @foreach($accounts as $account)
            <p>deze mensen gingen je voor</p>{{$account->username}}<br>
        @endforeach
    @endif


@stop
@section('footer')
    <p>&copy; 2017 D&M productions</p>
@stop



