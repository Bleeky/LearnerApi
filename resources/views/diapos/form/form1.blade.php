<div id="diapo-form">
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
                {!! Form::text('diapo-data', $diapo['content'][0]->data, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-name', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-data', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-name', 'autocomplete'=>'off')) !!}
            @endif
        </div>
        {!! Form::submit('Update informations', ['id'=>'update-diapo-button', 'name'=>'update-module-button', 'class'
        =>
        'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
</div>