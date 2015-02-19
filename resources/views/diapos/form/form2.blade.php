<div id="diapo-form">
    <div class="container">
        @if ($diapo['content'][0]->img)
            {!! HTML::image($diapo['content'][0]->img, null, (['class' => 'img-responsive img-rounded', 'style' =>
            'max-height: 300px; margin-right: auto; margin-left: auto;'])) !!}
        @endif

        {!! Form::open(['action'=>'DiapoEditAdminController@postUpdateForm2', 'id'=>'module-infos',
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
            <label>Diapo image</label>
            {!! Form::file('diapo-picture') !!}
        </div>
        {!! Form::submit('Update informations', ['id'=>'update-diapo-button', 'name'=>'update-module-button', 'class'
        =>
        'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
</div>