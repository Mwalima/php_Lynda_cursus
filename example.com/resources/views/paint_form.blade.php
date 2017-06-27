<form action="/paint_form" method = "get">
    <input type="hidden">
    {{ csrf_field() }}
    Raad het request woord:<input type="text" name="title" value="">
    {!! $title !!}
    <input type="submit" value="verzenden">
</form>
