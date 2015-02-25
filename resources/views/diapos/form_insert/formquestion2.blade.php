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
        {!! Form::open(['action'=>'DiapoInsertAdminController@postInsertFromFormQuestion2', 'id'=>'module-infos',
        'class'=>'admin-form', 'files'=>'true']) !!}
        {!! Form::hidden('diapo-id', $id) !!}
        {!! Form::hidden('module_id', $module_id) !!}
        <div class="form-group">
            <label>Question</label>
            {!! Form::text('diapo-question', null, array('class'=>'form-control',
            'autocomplete'=>'off', 'id'=>'diapo-question', 'autocomplete'=>'off')) !!}
        </div>
        <div class="form-group">
            <label>Réponse</label>
            {!! Form::text('diapo-response', null, array('class'=>'form-control',
            'autocomplete'=>'off', 'id'=>'diapo-response', 'autocomplete'=>'off')) !!}
        </div>
        <div class="form-group">
            <label>Valeur minimum</label>
            {!! Form::text('diapo-range_begin', null, array('class'=>'form-control',
            'autocomplete'=>'off', 'id'=>'diapo-range_begin', 'autocomplete'=>'off')) !!}
        </div>
        <div class="form-group">
            <label>Valeur maximum</label>
            {!! Form::text('diapo-range_end', null, array('class'=>'form-control',
            'autocomplete'=>'off', 'id'=>'diapo-range_end', 'autocomplete'=>'off')) !!}
        </div>
        <div class="form-group">
            <label>Valuer du pas</label>
            {!! Form::text('diapo-range_step', null, array('class'=>'form-control',
            'autocomplete'=>'off', 'id'=>'diapo-range_step', 'autocomplete'=>'off')) !!}
        </div>

        {!! Form::submit('Ajouter', ['id'=>'update-diapo-button', 'name'=>'update-module-button', 'class'
        => 'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
</div>