@extends('layouts.master')

@extends('includes.sidebar')
@section('sidebar-left')
    <h2>Publish a Posts</h2>
        <form method="POST" action="posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Publish</button>
        </form>
@stop
@section('sidebar-right')
@stop
@section('footer')
    <p>&copy; 2017 D&M productions</p>
@stop