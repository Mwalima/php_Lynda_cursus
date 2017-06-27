@include('includes.head')
<div id="contentWrapper">
    <div class="container">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <h2>Painting table</h2>
        <table width="50%">
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
                    <td><img src="example.com/public/_images/{!! $painting->image !!}"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('includes.sidebar')
</div>
@include('includes.footer')
