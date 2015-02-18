@extends('layouts.default')

@section('content')
{{--{{!! dd($diapos) !!}}--}}
    <div class="container">
        @if (!empty($diapos))
            <a style="text-decoration: none;" class="btn btn-success" href="{{ URL::action('DiapoAdminController@getInsertDiapo', 0) }}">Insérer une diapo</a>
            0
            @foreach($diapos as $elem)
                <div class="panel panel-default">
                    <div class="panel-body" style="text-align: center;">
                        Type de la diapo : {!! $elem[0]->type!!}
                        @if($elem[0]->img)
                            <div>
                                Image associée à la diapo :
                                {!! HTML::image($elem[0]->img, null, (['class' => 'img-responsive img-rounded', 'style'
                                => 'max-height: 150px; margin-right: auto; margin-left: auto;'])) !!}
                            </div>
                        @endif
                        @if($elem[0]->data)
                            <span>{!! $elem[0]->data!!}</span>
                            </br>
                        @endif
                        {!! $elem['id']!!}
                        <a style="text-decoration: none;" class="btn btn-warning" href="{{ URL::action('DiapoAdminController@getEditDiapo', [$elem['id']]) }}">Éditer</a>
                        <a style="text-decoration: none;" class="btn btn-danger" href="{{ URL::action('DiapoAdminController@getDeleteDiapo', [$elem['id']]) }}">Supprimer</a>
                    </div>
                </div>
                <a style="text-decoration: none;" class="btn btn-success" href="{{ URL::action('DiapoAdminController@getInsertDiapo', [$elem['id']]) }}">Insérer une diapo</a>
                {!! $elem['id']!!}
            @endforeach
        @else
            <div class="panel panel-default">
                <div class="panel-body" style="text-align: center;">
                    <a style="text-decoration: none;" class="btn btn-success" href="{{ URL::action('DiapoAdminController@getInsertDiapo', 0) }}">Insérer une diapo</a>
                </div>
            </div>
    </div>
    @endif
@stop