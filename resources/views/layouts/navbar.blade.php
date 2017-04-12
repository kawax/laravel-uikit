<nav class="uk-navbar-container" uk-navbar>

    <!-- Left Side Of Navbar -->
    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <ul class="uk-navbar-nav">
            <li><a href="{{ url('/home') }}">Home</a></li>
        </ul>
    </div>

    <!-- Right Side Of Navbar -->
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li>
                    <a href="#" uk-icon="icon: triangle-down">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif
        </ul>

    </div>

</nav>
