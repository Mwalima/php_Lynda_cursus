{{--@section('content')--}}
    {{----}}
{{--@stop--}}
<form action="paint_form.blade.php" method = "/get">
    <input type="hidden">
    {{ csrf_field() }}
    <input type="text" name="title">
    <input type="submit" value="verzenden">
</form>