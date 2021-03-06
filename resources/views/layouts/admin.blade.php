<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
  <title>@yield('title', $viewData['title'])</title>
</head>

<body>
  <div class="row g-0">
    <!-- sidebar -->
    <div class="p-3 col fixed text-white bg-dark">
      <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
        <span class="fs-4">{{ __('layouts.admin.panel') }}</span>
      </a>
      <hr />
      <ul class="nav flex-column">
        <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">{{ __('layouts.admin.home') }}</a></li>
        <li><a href="{{ route('admin.computer.index') }}" class="nav-link text-white">{{ __('layouts.admin.computers') }}</a></li>
        <li><a href="{{ route('admin.category.index') }}" class="nav-link text-white">{{ __('layouts.admin.categories') }}</a></li>
        <li><a href="{{ route('admin.order.statistics') }}" class="nav-link text-white">{{ __('layouts.admin.statistics') }}</a></li>
        <li>
          <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">{{ __('layouts.admin.back') }}</a>
        </li>
      </ul>
    </div>
    <!-- sidebar -->
    <div class="col content-grey">
      <nav class="p-3 shadow text-end">
        <span class="profile-font">{{ __('layouts.admin.user') }}</span>
        <img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
      </nav>

      <div class="g-0 m-5">
        @yield('content')
      </div>
    </div>
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
