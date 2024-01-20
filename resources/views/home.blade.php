
@if(auth()->check())
    Welcome {{ auth()->user()->name }} <a href="{{ route('auth.logout') }}">Logout</a>
@else
    <a href="{{ route('auth.login.view') }}">Login</a>
@endif
