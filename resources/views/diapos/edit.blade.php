@extends('layouts.default')

@section('content')
    @include('diapos.form.selector')

    @if ($diapo['content'][0]->type == "1")
        @include('diapos.form.form1')
    @elseif ($diapo['content'][0]->type == "2")
        @include('diapos.form.form2')
    @elseif ($diapo['content'][0]->type == "3")
        @include('diapos.form.form3')
    @endif
@stop