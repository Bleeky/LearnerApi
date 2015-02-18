{!! Form::open(array('action' => 'AuthenticationController@postAuthenticate', 'class' =>
'form-horizontal')) !!}
<div class="form-group">
    <label class="col-md-4 control-label">title</label>

    <div class="col-md-6">
        {!! Form::text('title', null, array('id'=>'username',
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