<nav class="navbar navbar-default">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL::action('AdminController@getIndex') }}">Home</a></li>
            <li><a href="{{ URL::action('ModuleAdminController@getIndex') }}">Modules</a></li>
            <li><a href="{{ URL::action('UserAdminController@getIndex') }}">Users</a></li>
            <li><a href="{{ URL::action('PatientAdminController@getIndex') }}">Patients</a></li>
            <li><a href="">Settings</a></li>
            <li><a href="{{ URL::action('AuthenticationController@getLogout') }}">Logout</a></li>
        </ul>
    </div>
</nav>