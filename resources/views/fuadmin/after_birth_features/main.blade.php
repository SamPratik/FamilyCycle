@includeif('partials._header')

  <body>
    @includeif('fuadmin.partials._navbar')
    <div style="position:relative;top:100px;">
        @yield('updateButton')
    </div>
    <div class="container" style="position:relative;top:100px;">
        <div style="color:black;font-weight:bold;">@yield('contentHeader')</div>
        <div style="padding:20px 200px;color:black;">
            @if (session()->has('updateSuccess'))
                <div class="alert alert-success">
                    <strong>Success!</strong> {{ session('updateSuccess') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
    <div style="clear:both;">

    </div>
    @includeif('partials._footer')
    @stack('scripts')
  </body>
</html>
