<div class="panel panel-default">
    <div class="panel-body" style="text-align: center;">
        Type de la diapo [{!!$elem[0]->type!!}] un slider.
        <br>
        <br>
        @if ($elem[0]->question)
            Question : {!! $elem[0]->question !!}
        @endif
        <br>
        <br>
        @if ($elem[0]->range_begin)
            Valeur de minimum : {!! $elem[0]->range_begin !!}
        @endif
        <br>
        @if ($elem[0]->range_end)
            Valeur de maximum : {!! $elem[0]->range_end !!}
        @endif
        <br>
        @if ($elem[0]->range_step)
            Valeur du pas : {!! $elem[0]->range_step !!}
        @endif
        <br>
        @if ($elem[0]->response)
            Reponse : {!! $elem[0]->response !!}
        @endif
        <br>
        <br>
        Id de la diapo [{!! $elem['id']!!}]
        <a style="text-decoration: none;" class="btn btn-warning"
           href="{{ URL::action('DiapoAdminController@getEditDiapo', [$elem['id']]) }}">Éditer</a>
        <a style="text-decoration: none;" class="btn btn-danger"
           href="{{ URL::action('DiapoAdminController@getDeleteDiapo', [$elem['id']]) }}">Supprimer</a>
    </div>
</div>