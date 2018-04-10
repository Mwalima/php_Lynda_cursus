<!doctype html>
<html>
<head>
    @include('partials.header')
</head>
<body>
<div class="navbar-nav navbar-inverse navbar-fixed-top">
    @include('partials.nav_menu')
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="register-info-wraper">
                <div id="register-info">
                    <div class="cont2">
                        <div class="thumbnail">
                            <img src="{{asset('images/face2.png')}}" alt="Mwalima Peltenburg" class="img-circle">
                        </div><!-- /thumbnail -->
                        <h2>Mwalima Peltenburg</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="cont3">
                                <p><ok>Username:</ok>{{$name}}</p>
                                <p><ok>Mail:</ok>{{$email}}</p>
                                <p><ok>Location:</ok>{{$city}}</p>
                                <p><ok>Address:</ok>{{$street}}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="cont3">
                                {{--<p><ok>Registered:</ok>{{$created_at}}</p>--}}
                                {{--<p><ok>Last Login:</ok>{{$lastlogin}}</p>--}}
                                {{--<p><ok>Phone:</ok>{{$phonenumber}}</p>--}}
                                {{--<p><ok>Mobile</ok>{{$mobilephonenumber}}</p>--}}
                            </div>
                        </div>
                    </div><!-- /inner row -->
                </div>
            </div>

        </div>

        <div class="col-sm-6 col-lg-6">
            <div id="register-wraper">
                <form id="register-form" class="form">
                    <legend>User Register</legend>

                    <div class="body">
                        {!! Form::open(['route'=>'Users.store']) !!}

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::label('Name:') !!}
                            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                            {!! Form::label('Lastname:') !!}
                            {!! Form::text('lastname', old('lastname'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('Email:') !!}
                            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('street') ? 'has-error' : '' }}">
                            {!! Form::label('Street:') !!}
                            {!! Form::text('street', old('street'), ['class'=>'form-control', 'placeholder'=>'Enter streetname']) !!}
                            <span class="text-danger">{{ $errors->first('street') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('housenumber') ? 'has-error' : '' }}">
                            {!! Form::label('Housenumber:') !!}
                            {!! Form::text('housenumber', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter housenumber']) !!}
                            <span class="text-danger">{{ $errors->first('housenumber') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                            {!! Form::label('City:') !!}
                            {!! Form::text('city', old('city'), ['class'=>'form-control', 'placeholder'=>'Enter cityname']) !!}
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        </div>
                        <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> I agree with the terms &amp; conditions
                        </label>
                        <div class="form-group">
                            <button class="btn btn-success">Register!</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<div id="footerwrap">
    @include('partials.footer')
</div><!-- /footerwrap -->
</body></html>