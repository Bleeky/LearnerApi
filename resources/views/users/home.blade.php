@extends('layouts.default')
@section('content')

    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                @include('users.users')
            </table>
        </div>
    </div>


@stop