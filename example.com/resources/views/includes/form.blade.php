
{{ Form::open(array('url' => 'login')) }}

{{Form::label('username', 'Username')}}
{{Form::text('username')}}

{{Form::label('password', 'password')}}
{{Form::password('password')}}

{{Form::submit('Sign Up')}}

{{Form::close()}}