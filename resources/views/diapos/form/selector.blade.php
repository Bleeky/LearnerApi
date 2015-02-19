<div class="container" style="text-align: center; margin-bottom: 26px;">
    <div class="form-group">
        <label class="col-md-4 control-label">Type</label>

        <div class="col-md-6">
            <select id="form-selector">
                <option value="-1"></option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.form1']) }}">1</option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.form2']) }}">2</option>
                <option value="{{ URL::action('DiapoEditAdminController@getEditToForm', [$diapo['id'], 'diapos.form_edit.form3']) }}">3</option>
            </select>
        </div>
    </div>
</div>
