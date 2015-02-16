
@extends('layouts.default')

@section('content')

    <div class="container">

        @foreach($diapos as $elem)
            <div class="panel panel-default">
                <div class="panel-body" style="text-align: center;">
                    Type de la diapo : {!! $elem[0]->type!!}
                    @if($elem[0]->img)
                        <div>
                            Image associé à la diapo :
                        {!! HTML::image($elem[0]->img, null, (['class' => 'img-responsive img-rounded', 'style' => 'max-height: 150px; margin-right: auto; margin-left: auto;'])) !!}
                        </div>
                    @endif
                    <span>{!! $elem[0]->data!!}</span>
                    </br>

                    <a style="text-decoration: none;" class="btn btn-success" href="">Editer</a>
                    <a style="text-decoration: none;" class="btn btn-danger" href="">Supprimer</a>
                </div>
            </div>
            <a style="text-decoration: none;" class="btn btn-success" href="">Insérer</a>
        @endforeach
    </div>
@stop