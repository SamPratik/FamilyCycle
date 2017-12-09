@includeif('partials._header')
  <body>
    @include('partials._navbar')

    @yield('content')

    @include('partials._footer')

    @stack('scripts')
  </body>
</html>
