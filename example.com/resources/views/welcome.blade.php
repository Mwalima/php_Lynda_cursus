@include('includes.head')
<div id="contentWrapper">
    <table class="teset">
        <div class="section_header section_header_grey">
            <h2>Inhoud</h2>
        </div>
        <tr><td><a href="/register">registeren</a></td></tr>
        <tr><td><a href="/login">inloggen</a></td></tr>
        <tr><td><a href="/logout">Uitloggen</a></td></tr>
        <tr><td><a href="/werk">Werk</a></td></tr>
        <tr><td><a href="/paintings">Paintings</a></td></tr>
        <tr><td><a href="/config">config</a></td></tr>
    </table>
    @include('includes.sidebar')
</div>
@include('includes.footer')