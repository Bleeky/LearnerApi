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
            {!! Form::text('diapo-title', null, array('class'=>'form-control',
            'autocomplete'=>'off', 'id'=>'diapo-name', 'autocomplete'=>'off')) !!}
        </div>
        <div class="form-group">
            <label>Diapo text</label>
            {!! Form::textarea('diapo-data', null, array('class'=>'form-control',
            'autocomplete'=>'off', 'id'=>'diapo-name', 'autocomplete'=>'off')) !!}
        </div>
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