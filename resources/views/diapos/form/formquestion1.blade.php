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
            @if ($diapo['content'][0]->question)
                {!! Form::text('diapo-question', $diapo['content'][0]->question, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-question', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-question', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-question', 'autocomplete'=>'off')) !!}
            @endif
        </div>
        <div class="form-group">
            <label>Réponse 1</label>
            @if ($diapo['content'][0]->responses && $diapo['content'][0]->responses[0]->response)
                {!! Form::text('diapo-response1', $diapo['content'][0]->responses[0]->response,
                array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-response1', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-response1', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-response1', 'autocomplete'=>'off')) !!}
            @endif
            @if($diapo['content'][0]->responses && $diapo['content'][0]->responses[0]->valid == "true")
                {!! Form::select('select-response1',['true' => 'vrai', 'false' => 'faux'] ,  'true',
                array('class'=>'form-control',
                'id'=>'select-response1')) !!}
            @else
                {!! Form::select('select-response1',['true' => 'vrai', 'false' => 'faux'] ,  'false',
                array('class'=>'form-control',
                'id'=>'select-response1')) !!}
            @endif
        </div>
        <div class="form-group">
            <label>Réponse 2</label>
            @if ($diapo['content'][0]->responses && $diapo['content'][0]->responses[1]->response)
                {!! Form::text('diapo-response2', $diapo['content'][0]->responses[1]->response,
                array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-response2', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-response2', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-repsonse2', 'autocomplete'=>'off')) !!}
            @endif
            @if($diapo['content'][0]->responses && $diapo['content'][0]->responses[1]->valid == "true")
                {!! Form::select('select-response2',['true' => 'vrai', 'false' => 'faux'] ,  'true',
                array('class'=>'form-control',
                'id'=>'select-response2')) !!}
            @else
                {!! Form::select('select-response2',['true' => 'vrai', 'false' => 'faux'] ,  'false',
                array('class'=>'form-control',
                'id'=>'select-response2')) !!}
            @endif
        </div>
        <div class="form-group">
            <label>Réponse 3</label>
            @if ($diapo['content'][0]->responses && $diapo['content'][0]->responses[2]->response)
                {!! Form::text('diapo-response3', $diapo['content'][0]->responses[2]->response,
                array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-response3', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-response3', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-response3', 'autocomplete'=>'off')) !!}
            @endif
            @if($diapo['content'][0]->responses && $diapo['content'][0]->responses[2]->valid == "true")
                {!! Form::select('select-response3',['true' => 'vrai', 'false' => 'faux'] ,  'true',
                array('class'=>'form-control',
                'id'=>'select-response3')) !!}
            @else
                {!! Form::select('select-response3',['true' => 'vrai', 'false' => 'faux'] ,  'false',
                array('class'=>'form-control',
                'id'=>'select-response3')) !!}
            @endif
        </div>
        <div class="form-group">
            <label>Réponse 4</label>
            @if ($diapo['content'][0]->responses && $diapo['content'][0]->responses[3]->response)
                {!! Form::text('diapo-response4', $diapo['content'][0]->responses[3]->response,
                array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-response4', 'autocomplete'=>'off')) !!}
            @else
                {!! Form::text('diapo-response4', null, array('class'=>'form-control',
                'autocomplete'=>'off', 'id'=>'diapo-response4', 'autocomplete'=>'off')) !!}
            @endif
            @if($diapo['content'][0]->responses && $diapo['content'][0]->responses[3]->valid == "true")
                {!! Form::select('select-response4',['true' => 'vrai', 'false' => 'faux'] ,  'true',
                array('class'=>'form-control',
                'id'=>'select-response4')) !!}
            @else
                {!! Form::select('select-response4',['true' => 'vrai', 'false' => 'faux'] ,  'false',
                array('class'=>'form-control',
                'id'=>'select-response4')) !!}
            @endif
        </div>

        {!! Form::submit('Update informations', ['id'=>'update-diapo-button', 'name'=>'update-module-button', 'class'
        =>
        'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
</div>