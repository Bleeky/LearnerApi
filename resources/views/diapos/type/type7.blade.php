<div class="panel panel-default">
    <div class="panel-body" style="text-align: center;">
        Type de la diapo [{!!$elem[0]->type!!}] un questionnaire a choix multiples.
        <br>
        <br>
        @if ($elem[0]->question)
            Question : {!! $elem[0]->question !!}
        @endif
        <br>
        <br>
        @if ($elem[0]->responses)
            <li>Reponse 1 : {!! $elem[0]->responses[0]->response !!}</li>
            <li>Reponse 2 : {!! $elem[0]->responses[1]->response !!}</li>
            <li>Reponse 3 : {!! $elem[0]->responses[2]->response !!}</li>
            <li>Reponse 4 : {!! $elem[0]->responses[3]->response !!}</li>
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