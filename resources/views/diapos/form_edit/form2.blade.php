<div id="diapo-form">
    <div class="container">
        {!! Form::open(['action'=>'ModuleAdminController@postUpdateModule', 'id'=>'module-infos',
        'class'=>'admin-form', 'files'=>'true']) !!}
        {!! Form::hidden('diapo-id', $diapo['id']) !!}
        <div class="form-group">
            <label>Diapo title</label>
            {!! Form::text('diapo-title', null, array('class'=>'form-control',
            'autocomplete'=>'off', 'id'=>'diapo-name', 'autocomplete'=>'off')) !!}
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