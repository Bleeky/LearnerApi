<div class="container" style="text-align: center; margin-bottom: 26px;">
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

    <a style="text-decoration: none; margin-top: 13px; margin-bottom: 13px;" class="btn btn-primary"
       href="{{ URL::action('DiapoAdminController@getHome', [$module_id]) }}">Retour</a>

    <div class="form-group">
        <label class="col-md-4 control-label">Type</label>

        <div class="col-md-6">
            <select id="form-selector">
                <option value="-1"></option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.form1', $id, $module_id]) }}">1</option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.form2', $id, $module_id]) }}">2</option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.form3', $id, $module_id]) }}">3</option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.form4', $id, $module_id]) }}">4</option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.form5', $id, $module_id]) }}">5</option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.formquestion1',$id, $module_id]) }}">6/7</option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.formquestion2',$id, $module_id]) }}">8</option>
            </select>
        </div>
    </div>
</div>
