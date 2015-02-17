@extends('layouts.default')
@section('content')


    <div class="container">
        <a style="float:left; text-decoration: none;" class="btn btn-success"
           href="{{ URL::action('UserAdminController@getAddUser') }}">Ajouter un utilisateur</a>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                @include('users.users')
            </table>
        </div>
    </div>


@stop