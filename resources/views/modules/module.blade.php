@extends('layouts.default')

@section('content')
    <div class="container">
        @foreach($modules as $module)
            <div class="panel panel-default">
                <div class="panel-body" style="text-align: center;">
                    {!! $module->title !!}
                    {!! HTML::image($module->img, null, (['class' => 'img-responsive img-rounded', 'style' => 'max-height: 300px; margin-right: auto; margin-left: auto;'])) !!}
                    <a style="text-decoration: none;" class="btn btn-success" href="">Editer</a>
                    <a style="text-decoration: none;" class="btn btn-success" href="{{ URL::action('DiapoAdminController@getHome', [$module->id]) }}">Diapos</a>
                </div>
            </div>
        @endforeach
    </div>
@stop
