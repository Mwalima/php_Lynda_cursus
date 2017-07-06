@extends('layouts.master')

@extends('includes.sidebar')
@section('sidebar-left')
    <h2>Painting table</h2>
    <table class="table table-inverse">
        <thead>
        <tr>
            <th>Title</th>
            <th>artist</th>
            <th>year</th>
            <th>image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($paintings as $painting)
            <tr>
                <td>{!! $painting->title !!}</td>
                <td>{!! $painting->artist !!}</td>
                <td>{!! $painting->year !!}</td>
                <td><img class="painting"  src="{{asset('/img').'/'.$painting->image}}"></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('sidebar-right')
    @stop
@section('footer')
    <p>&copy; 2017 D&M productions</p>
@stop




