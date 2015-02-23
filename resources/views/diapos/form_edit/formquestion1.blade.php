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

        {!! Form::open(['action'=>'DiapoEditAdminController@postUpdateFormQuestion1', 'id'=>'module-infos',
        'class'=>'admin-form', 'files'=>'true']) !!}
        {!! Form::hidden('diapo-id', $diapo['id']) !!}
        <div class="form-group">
            <label>Question</label>
                {!! Form::text('diapo-question', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-question', 'autocomplete'=>'off')) !!}
        </div>
        <div class="form-group">
            <label>Réponse 1</label>
                {!! Form::text('diapo-response1', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-response1', 'autocomplete'=>'off')) !!}
        </div>
        <div class="form-group">
            <label>Réponse 2</label>
                {!! Form::text('diapo-response2', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-reponse2', 'autocomplete'=>'off')) !!}
        </div>
        <div class="form-group">
        <label>Réponse 3</label>
        {!! Form::text('diapo-response3', null, array('class'=>'form-control',
        'autocomplete'=>'off', 'id'=>'diapo-response3', 'autocomplete'=>'off')) !!}
        </div>
        <div class="form-group">
        <label>Réponse 4</label>
        {!! Form::text('diapo-response4', null, array('class'=>'form-control',
        'autocomplete'=>'off', 'id'=>'diapo-response4', 'autocomplete'=>'off')) !!}
        </div>
        {!! Form::submit('Update informations', ['id'=>'update-diapo-button', 'name'=>'update-module-button', 'class'
        =>
        'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
</div>