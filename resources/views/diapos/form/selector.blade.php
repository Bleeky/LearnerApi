<div class="container" style="text-align: center; margin-bottom: 26px;">
    <div class="form-group">
        <label class="col-md-4 control-label">Type</label>

        <div class="col-md-6">
            <select id="form-selector">
                <option value="-1"></option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.form1']) }}">1</option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.form2']) }}">2</option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.form3']) }}">3</option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.form4']) }}">4</option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.form5']) }}">5</option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.formquestion1']) }}">6</option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.formquestion1']) }}">7</option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.formquestion2']) }}">8</option>
            </select>
        </div>
    </div>
</div>
