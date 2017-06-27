@include('includes.head')
<div id="contentWrapper">
  <article id="mainContent">
    <h1>Sign Up!</h1>
    <article class="post">
      <h2>New User Registration</h2>
{{ Form::open(array('url' => 'register')) }}

{{Form::label('email', 'Email Address')}}
{{Form::text('email')}}

{{Form::label('username', 'Username')}}
{{Form::text('username')}}

{{Form::label('password', 'password')}}
{{Form::password('password')}}

{{Form::submit('Sign Up')}}

{{Form::close()}}

</article>
  </article>
  <aside>
    <section class="info">
      <div class="widget">
        <h2>Search</h2>
        <form>
          <input type="search" id="searchField" placeholder="Enter keyword(s)" />
          <input type="submit" name="search" id="search" value="">
        </form>
      </div>
      <div class="widget">
        <h2>Hot Links</h2>
        <ul>
          <li><a href="#">Conference Schedule-At-A-Glance</a></li>
          <li><a href="#">Another Page Title</a></li>
          <li><a href="#">Yet Another Page Title</a></li>
        </ul>
      </div>
      <div class="widget">
        <h2>Archive</h2>
        <ul>
          <li><a href="#">September</a></li>
          <li><a href="#">August</a></li>
          <li><a href="#">July</a></li>
          <li><a href="#">June</a></li>
        </ul>
      </div>
      <div class="widget">
        <h2>Categories</h2>
        <ul>
          <li><a href="#">Conference</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Student Life</a></li>
          <li><a href="#">Zeitgeist</a></li>
        </ul>
      </div>
    </section>
  </aside>
</div>
@include('includes.footer')
