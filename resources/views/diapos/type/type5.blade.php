<div class="panel panel-default">
    <div class="panel-body" style="text-align: center;">
        Type de la diapo [{!!$elem[0]->type!!}] une image a droite et un texte a gauche.
        <br>
        <br>
        @if ($elem[0]->title)
            <div>
                Titre : {!! $elem[0]->title !!}
            </div>
        @endif
        @if($elem[0]->data)
            <div style="float: left;">
                <span>{!! $elem[0]->data!!}</span>
            </div>
        @endif
        @if($elem[0]->img)
            <div>
                {!! HTML::image($elem[0]->img, null, (['class' => 'img-responsive img-rounded', 'style'
                => 'max-height: 150px; margin-right: auto; margin-left: auto;'])) !!}
            </div>
        @endif
        <a style="text-decoration: none;" class="btn btn-warning"
           href="{{ URL::action('DiapoAdminController@getEditDiapo', [$elem['id']]) }}">Éditer</a>
        <a style="text-decoration: none;" class="btn btn-danger"
           href="{{ URL::action('DiapoAdminController@getDeleteDiapo', [$elem['id']]) }}">Supprimer</a>
    </div>
</div>