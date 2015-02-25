<div class="container" style="text-align: center; margin-bottom: 26px;">
    <div class="form-group">
        <label class="col-md-4 control-label">Type</label>

        <div class="col-md-6">
            <select id="form-selector">
                <option value="-1"></option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.form1', $id, $module_id]) }}">1</option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.form2', $id, $module_id]) }}">2</option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.form3', $id, $module_id]) }}">3</option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.formquestion1',$id, $module_id]) }}">6</option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.formquestion1',$id, $module_id]) }}">7</option>
                <option value="{{ URL::action('DiapoInsertAdminController@getInsertToForm', ['diapos.form_insert.formquestion2',$id, $module_id]) }}">8</option>
            </select>
        </div>
    </div>
</div>
