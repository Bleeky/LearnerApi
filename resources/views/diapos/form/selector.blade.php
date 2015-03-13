<div class="container" style="text-align: center; margin-bottom: 26px;">
        <a style="text-decoration: none; margin-top: 13px; margin-bottom: 13px;" class="btn btn-primary"
           href="{{ URL::action('DiapoAdminController@getHome', [$diapo['module_id']]) }}">Retour</a>

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
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.formquestion3']) }}">7</option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.formquestion2']) }}">8</option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.formvideo']) }}">9</option>
            </select>
        </div>
    </div>
</div>
