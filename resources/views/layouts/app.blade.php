<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <link href="{{ asset('css/all.css') }}" rel="stylesheet">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>

<nav class="uk-navbar uk-margin-bottom">

  {{--<a href="" class="uk-navbar-toggle"></a>--}}

  <a class="uk-navbar-brand" href="{{ url('/') }}">
    Laravel
  </a>

  <!-- Left Side Of Navbar -->
  <ul class="uk-navbar-nav">
    <li><a href="{{ url('/home') }}">Home</a></li>
  </ul>

  <!-- Right Side Of Navbar -->
  <div class="uk-navbar-flip">

    <ul class="uk-navbar-nav">
      <!-- Authentication Links -->
      @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
      @else
        <li class="uk-parent" data-uk-dropdown>
          <a href="#">
            {{ Auth::user()->name }} <i class="uk-icon-caret-down"></i>
          </a>

          <div class="uk-dropdown uk-dropdown-navbar">
            <ul class="uk-nav uk-nav-navbar">
              <li>
                <a href="#">...</a>
              </li>
            </ul>
          </div>
        </li>
      @endif
    </ul>

    @if(Auth::check())
      <div class="uk-navbar-content">
        <form action="{{ url('/logout') }}" method="POST" class="uk-form uk-margin-remove uk-display-inline-block">
          {{ csrf_field() }}
          <button type="submit" class="uk-button">
            Logout
          </button>
        </form>
      </div>
    @endif

  </div>

</nav>

@yield('content')


<!-- JavaScripts -->

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
