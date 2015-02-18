<div id="diapo-form">
    {!! Form::open(array('class' =>
'form-horizontal')) !!}
<div class="form-group">
    <label class="col-md-4 control-label">Title : </label>

    <div class="col-md-6">
        {!! Form::text('title', null, array('id'=>'title',
        'autocomplete'=>'off',
        'autofocus'=>'autofocus', 'class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Text : </label>

    <div class="col-md-6">
        {!! Form::text('text', null, array('id'=>'text',
        'autocomplete'=>'off', 'class' => 'form-control')) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">

        {!! Form::submit('Ok', array('class' => 'btn btn-primary')) !!}
    </div>
</div>
{!! Form::close() !!}
    </div>