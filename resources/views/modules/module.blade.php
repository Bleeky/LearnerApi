@extends('layouts.default')

@section('content')

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
        <a style="text-decoration: none;" class="btn btn-success" href="{{ URL::action('ModuleAdminController@getNewModule') }}">Ajouter</a>
    @foreach($modules as $module)
            <div class="panel panel-default">
                <div class="panel-body" style="text-align: center;">
                    {!! $module->title !!}
                    @if ($module->img)
                        {!! HTML::image($module->img, null, (['class' => 'img-responsive img-rounded', 'style' =>
                        'max-height: 300px; margin-right: auto; margin-left: auto;'])) !!}
                    @endif
                    <a style="text-decoration: none;" class="btn btn-success"
                       href="{{ URL::action('ModuleAdminController@getEditModule', [$module->id]) }}">Editer</a>
                    <a style="text-decoration: none;" class="btn btn-warning" href="{{ URL::action('DiapoAdminController@getHome', [$module->id]) }}">Diapos</a>
                    <a style="text-decoration: none;" class="btn btn-danger" href="{{ URL::action('ModuleAdminController@getDeleteModule', [$module->id]) }}">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
@stop
