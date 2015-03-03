@extends('layouts.default')

@section('content')

    <div id="module-form">
        <div class="container">
            @if ($errors->has('success'))
                <div class="label label-success">
                    {{ $errors->first('success') }}
                </div>
            @elseif ($errors->has())
                <div class="label label-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

        </div>

        <div class="container">
            {!! Form::open(['action'=>'ModuleAdminController@postAddModule', 'id'=>'module-infos',
            'class'=>'admin-form', 'files'=>'true']) !!}
            <div class="form-group">
                <label>Module title</label>
                {!! Form::text('module-title', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-name', 'autocomplete'=>'off')) !!}
            </div>
            <div class="form-group">
                <label>Module image</label>
                {!! Form::file('module-picture') !!}
            </div>
            <div class="form-group">
                <label>Module description</label>
                {!! Form::textarea('module-description', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'module-name', 'autocomplete'=>'off')) !!}
            </div>

            {!! Form::submit('Add module', ['id'=>'update-module-button', 'name'=>'update-module-button', 'class'
            =>
            'btn btn-success'])!!}
            {!! Form::close() !!}
        </div>
    </div>

@stop