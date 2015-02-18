@extends('layouts.default')

@section('content')
    {{--{{!! dd($diapos) !!}}--}}
    <div class="container">
        @if (!empty($diapos))
            <a style="text-decoration: none;" class="btn btn-success"
               href="{{ URL::action('DiapoAdminController@getInsertDiapo', 0) }}">Insérer une diapo</a>
            0
            @foreach($diapos as $elem)
                @if ($elem[0]->type == "1")
                    @include('diapos.type.type1')
                @elseif($elem[0]->type == "2")
                    @include('diapos.type.type2')
                @elseif($elem[0]->type == "3" || $elem[0]->type == "4")
                    @include('diapos.type.type3')
                @endif
                <a style="text-decoration: none;" class="btn btn-success"
                   href="{{ URL::action('DiapoAdminController@getInsertDiapo', [$elem['id']]) }}">Insérer une diapo</a>
                {!! $elem['id']!!}
            @endforeach
        @else
            <div class="panel panel-default">
                <div class="panel-body" style="text-align: center;">
                    <a style="text-decoration: none;" class="btn btn-success"
                       href="{{ URL::action('DiapoAdminController@getInsertDiapo', 0) }}">Insérer une diapo</a>
                </div>
            </div>
    </div>
    @endif
@stop