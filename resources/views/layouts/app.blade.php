<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <title>@yield('title', __('layouts.app.title'))</title>
</head>

<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home.index') }}">{{ __('layouts.app.store') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" href="{{ route('home.index') }}">{{ __('layouts.app.home') }}</a>
          <a class="nav-link active" href="{{ route('computer.index') }}">{{ __('layouts.app.computers') }}</a>
          <a class="nav-link active" href="{{ route('phone.index') }}">{{ __('layouts.app.phones') }}</a>
          <a class="nav-link active" href="{{ route('order.index') }}">{{ __('layouts.app.order') }}</a>
          <a class="nav-link active" href="{{ route('home.about') }}">{{ __('layouts.app.about') }}</a>
          <div class="vr bg-white mx-2 d-none d-lg-block"></div>
          @guest
          <a class="nav-link active" href="{{ route('login') }}">{{ __('layouts.app.login') }}</a>
          <a class="nav-link active" href="{{ route('register') }}">{{ __('layouts.app.register') }}</a>
          @else
          <a class="nav-link active" href="{{ route('order.list') }}">{{ __('layouts.app.myOrder') }}</a>
          <form id="logout" action="{{ route('logout') }}" method="POST">
            <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">{{ __('layouts.app.logout') }}</a>
            @csrf
          </form>
          @endguest
        </div>
      </div>
    </div>
  </nav>

  <header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
      <h2>@yield('subtitle', __('layouts.app.subtitle'))</h2>
    </div>
  </header>
  <!-- header -->

  <div class="container my-4">
    @yield('content')
  </div>

  <!-- footer -->
  <div class="copyright py-4 text-center text-white">
    <div class="row">
      <div class="col">
      </div>

      <div class="col">
        <small>
          Copyright<a>
          </a> - <b>Daniela</b>
          </a> - <b>Samuel</b>
          </a> - <b>Juan Pablo</b>
        </small>
      </div>

      <div class="col">
        <small>
          @if (config('locale.status') && count(config('locale.languages')) > 1)
            @foreach (array_keys(config('locale.languages')) as $lang)
              @if ($lang != App::getLocale())
                <a href="{{ route('lang.swap', $lang) }}">
                  {{ $lang }}
                </a>
              @endif
            @endforeach
          @endif
        </small>
      </div>
    </div>
  </div>
  <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>

</html>