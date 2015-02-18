<div class="form-group">
    <label class="col-md-4 control-label">Type</label>

    <div class="col-md-6">
        <select id="form-selector">
            <option value="-1"></option>
            <option value="{{ URL::action('DiapoEditAdminController@getForm1') }}">1</option>
            <option value="{{ URL::action('DiapoEditAdminController@getForm2') }}">2</option>
            <option value="{{ URL::action('DiapoEditAdminController@getForm3') }}">3</option>
            <option value="{{ URL::action('DiapoEditAdminController@getForm3') }}">4</option>
        </select>
    </div>
</div>
