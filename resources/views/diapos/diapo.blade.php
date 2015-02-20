@extends('layouts.default')

@section('content')
    <div class="container">
        <a style="text-decoration: none; margin-top: 13px; margin-bottom: 13px;" class="btn btn-primary"
           href="{{ URL::action('ModuleAdminController@getIndex') }}">Retour</a>
        @if (!empty($diapos))
            <a style="text-decoration: none;" class="btn btn-success"
               href="{{ URL::action('DiapoAdminController@getInsertDiapo', 0) }}">Insérer une diapo</a>
            @foreach($diapos as $elem)
                @if ($elem[0]->type == "1")
                    @include('diapos.type.type1')
                @elseif($elem[0]->type == "2")
                    @include('diapos.type.type2')
                @elseif($elem[0]->type == "3")
                    @include('diapos.type.type3')
                @elseif($elem[0]->type == "4")
                    @include('diapos.type.type4')
                @elseif($elem[0]->type == "5")
                    @include('diapos.type.type5')
                @elseif($elem[0]->type == "6")
                    @include('diapos.type.type6')
                @elseif($elem[0]->type == "7")
                    @include('diapos.type.type7')
                @elseif($elem[0]->type == "8")
                    @include('diapos.type.type8')
                @endif
                <a style="text-decoration: none; margin-top: 13px; margin-bottom: 13px;" class="btn btn-success"
                   href="{{ URL::action('DiapoAdminController@getInsertDiapo', [$elem['id']]) }}">Insérer une diapo</a>
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