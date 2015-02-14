<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Modules</a></li>
            <li><a href="{{ URL::action('AuthenticationController@getLogout') }}">Logout</a></li>
        </ul>
    </div>
</nav>