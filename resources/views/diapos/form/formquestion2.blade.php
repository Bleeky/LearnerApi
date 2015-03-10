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
        {!! Form::open(['action'=>'DiapoEditAdminController@postUpdateFormQuestion2', 'id'=>'module-infos',
        'class'=>'admin-form', 'files'=>'true']) !!}
        {!! Form::hidden('diapo-id', $diapo['id']) !!}
        <div class="form-group">
            <label>Question</label>
            @if ($diapo['content'][0]->question)
                {!! Form::text('diapo-question', $diapo['content'][0]->question, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-question', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-question', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-question', 'autocomplete'=>'off')) !!}
            @endif
        </div>
        <div class="form-group">
            <label>Réponse</label>
            @if ($diapo['content'][0]->response)
                {!! Form::text('diapo-response', $diapo['content'][0]->response, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-response', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-response', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-response', 'autocomplete'=>'off')) !!}
            @endif
        </div>
        <div class="form-group">
            <label>Valeur minimum</label>
            @if ($diapo['content'][0]->range_begin)
                {!! Form::text('diapo-range_begin', $diapo['content'][0]->range_begin, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-range_begin', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-range_begin', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-range_begin', 'autocomplete'=>'off')) !!}
            @endif
        </div>
        <div class="form-group">
            <label>Valeur maximum</label>
            @if ($diapo['content'][0]->range_end)
                {!! Form::text('diapo-range_end', $diapo['content'][0]->range_end, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-range_end', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-range_end', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-range_end', 'autocomplete'=>'off')) !!}
            @endif
        </div>
        <div class="form-group">
            <label>Valeur du pas</label>
            @if ($diapo['content'][0]->range_step)
                {!! Form::text('diapo-range_step', $diapo['content'][0]->range_step, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-range_step', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-range_step', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-range_step', 'autocomplete'=>'off')) !!}
            @endif
        </div>

        {!! Form::submit('Update informations', ['id'=>'update-diapo-button', 'name'=>'update-module-button', 'class'
        => 'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
</div>