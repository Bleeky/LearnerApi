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
        </div>
        <div class="form-group">
            <label>Réponse : </label>
            @if ($diapo['content'][0]->responses)
            @for ($i = 0 ; !empty($diapo['content'][0]->responses[$i]) ; $i++)
                @if($diapo['content'][0]->responses[$i]->valid == "true")
                    {!! Form::select('select-response',['0' => '1', '1' => '2', '2' => '3','3' => '4'] ,  $i,
                    array('class'=>'form-control',
                     'id'=>'select-response')) !!}
                @endif
            @endfor
                @else
                        {!! Form::select('select-response',['0' => '1', '1' => '2', '2' => '3','3' => '4'] ,
                        array('class'=>'form-control',
                         'id'=>'select-response')) !!}

            @endif
        </div>
        {!! Form::submit('Update informations', ['id'=>'update-diapo-button', 'name'=>'update-module-button', 'class'
        =>
        'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
</div>