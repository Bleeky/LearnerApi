<div id="diapo-form">
    <div class="container">
        @if ($errors->has('success'))
            <div class="label label-success">
                {{ $errors->first('success') }}
            </div>
        @elseif ($errors->has())
            <div class="label label-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

    </div>
    <div class="container">

        {!! Form::open(['action'=>'DiapoEditAdminController@postUpdateFormVideo', 'id'=>'module-infos',
        'class'=>'admin-form', 'files'=>'true']) !!}
        {!! Form::hidden('diapo-id', $diapo['id']) !!}
        <div class="form-group">
            <label>Diapo title</label>
            @if ($diapo['content'][0]->title)
                {!! Form::text('diapo-title', $diapo['content'][0]->title, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-name', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-title', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-name', 'autocomplete'=>'off')) !!}
            @endif
            @if ($diapo['content'][0]->video)
                <video id="example_video_1" class="video-js vjs-big-play-centered vjs-default-skin"
                       controls preload="auto" width="640" height="264"
                       data-setup='{"example_option":true}'>
                    <source src="{!! $diapo['content'][0]->video !!}" type='video/mp4'/>
                </video>
            @endif
            <div class="form-group">
                <label>Video</label>
                {!! Form::file('diapo-video') !!}
            </div>

        </div>
        {!! Form::submit('Update informations', ['id'=>'update-diapo-button', 'name'=>'update-module-button', 'class'
        =>
        'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
</div>