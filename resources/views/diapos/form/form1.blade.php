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

        {!! Form::open(['action'=>'DiapoEditAdminController@postUpdateForm1', 'id'=>'module-infos',
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
        </div>
        <div class="form-group">
            <label>Diapo text</label>
            @if ($diapo['content'][0]->data)
                {!! Form::textarea('diapo-data', $diapo['content'][0]->data, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-name', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::textarea('diapo-data', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-name', 'autocomplete'=>'off')) !!}
            @endif
        </div>
        @if($diapo['content'][0]->audio)
            <audio controls>
                <source src="{!! $diapo['content'][0]->audio !!}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        @endif
        <div class="form-group">
            <label>Diapo audio</label>
            {!! Form::file('diapo-audio') !!}
        </div>
        {!! Form::submit('Update informations', ['id'=>'update-diapo-button', 'name'=>'update-module-button', 'class'
        =>
        'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
</div>