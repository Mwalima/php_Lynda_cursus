@include('includes.head')
<div id="contentWrapper">
  <article id="mainContent">
    <h1>Logout</h1>
    <article class="post">
<p> You have succesfully logged out.<a href="{{URL::to('/login')}}">Log in</a></p>
</article>
  </article>
    @include('includes.sidebar')
</div>
  @include('includes.footer')
