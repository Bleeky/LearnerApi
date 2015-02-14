<!DOCTYPE html>
<title>Learner</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{--<link rel="icon" href="{{ asset('ressources/assets/ico.png') }}"/>--}}

{!! HTML::style('css/dependencies.css') !!}
{!! HTML::style('css/app.css') !!}

{!! HTML::script('js/dependencies.min.js') !!}

<div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {!! Form::open(array('action' => 'AuthenticationController@postAuthenticate', 'class' =>
                        'form-horizontal')) !!}
                        <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                {!! Form::text('username', null, array('id'=>'username', 'placeholder'=>'Username',
                                'autocomplete'=>'off',
                                'autofocus'=>'autofocus', 'class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">

                                {!! Form::password('password', array('id'=>'password', 'placeholder'=>'Password',
                                'autocomplete'=>'off', 'class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                {!! Form::submit('Login', array('class' => 'btn btn-primary')) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
