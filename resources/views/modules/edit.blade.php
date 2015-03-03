@extends('layouts.default')
@section('content')

    <div class="container">
        @if ($module->img)
            {!! HTML::image($module->img, null, (['class' => 'img-responsive img-rounded', 'style' =>
            'max-height: 300px; margin-right: auto; margin-left: auto;'])) !!}
        @endif

        {!! Form::open(['action'=>'ModuleAdminController@postUpdateModule', 'id'=>'module-infos',
        'class'=>'admin-form', 'files'=>'true']) !!}
        {!! Form::hidden('module-id', $module->id) !!}
        <div class="form-group">
            <label>Module title</label>
            {!! Form::text('module-title', $module->title, array('class'=>'form-control',
            'autocomplete'=>'off', 'id'=>'module-name', 'autocomplete'=>'off')) !!}
        </div>
        <div class="form-group">
            <label>Module description</label>
            {!! Form::textarea('module-description', $module->description, array('class'=>'form-control description',
            'autocomplete'=>'off', 'id'=>'module-description', 'autocomplete'=>'off')) !!}
        </div>
        <div class="form-group">
            <label>Module image</label>
            {!! Form::file('module-picture') !!}
        </div>
        {!! Form::submit('Update informations', ['id'=>'update-module-button', 'name'=>'update-module-button', 'class'
        =>
        'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>

@stop