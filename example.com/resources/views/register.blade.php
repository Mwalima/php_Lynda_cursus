@include('includes.head')
<div id="contentWrapper">

  <article id="container">
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

  @include('includes.sidebar')
      </div>
@include('includes.footer')

