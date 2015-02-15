@extends('layouts.default')

@section('content')
    <div class="container">
        @foreach($modules as $module)
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! $module->title !!}
                </div>
            </div>
        @endforeach
    </div>
@stop
