<div class="panel panel-default">
    <div class="panel-body" style="text-align: center;">
        Type de la diapo [{!!$elem[0]->type!!}] une vidéo.
        <br>
        <br>
        @if ($elem[0]->title)
            Titre : {!! $elem[0]->title !!}
        @endif
        <br>
        <br>
        <video id="example_video_1" class="video-js vjs-big-play-centered vjs-default-skin"
               controls preload="auto" width="640" height="264"
               data-setup='{"example_option":true}'>
            <source src="{!! $elem[0]->video !!}" type='video/mp4' />
        </video>
        <br>
        <br>
        <a style="text-decoration: none;" class="btn btn-warning"
           href="{{ URL::action('DiapoAdminController@getEditDiapo', [$elem['id']]) }}">Éditer</a>
        <a style="text-decoration: none;" class="btn btn-danger"
           href="{{ URL::action('DiapoAdminController@getDeleteDiapo', [$elem['id']]) }}">Supprimer</a>
    </div>
</div>