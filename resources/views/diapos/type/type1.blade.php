<div class="panel panel-default">
    <div class="panel-body" style="text-align: center;">
        Type de la diapo [{!! $elem[0]->type !!}] texte seulement.
        <br>
        @if ($elem[0]->title)
            Titre : {!! $elem[0]->title !!}
        @endif
        @if($elem[0]->data)
            <br>
            <span>{!! $elem[0]->data !!}</span>
            <br>
        @endif
        @if($elem[0]->audio)
            <audio controls>
                <source src="{!! $elem[0]->audio !!}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        @endif
        <br>
        <a style="text-decoration: none;" class="btn btn-warning"
           href="{{ URL::action('DiapoAdminController@getEditDiapo', [$elem['id']]) }}">Éditer</a>
        <a style="text-decoration: none;" class="btn btn-danger"
           href="{{ URL::action('DiapoAdminController@getDeleteDiapo', [$elem['id']]) }}">Supprimer</a>
    </div>
</div>
