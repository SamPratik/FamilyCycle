@includeif('partials._header')
  <body>
    @includeif('partials._navbar')
    <div class="container" style="position:relative;top:100px;">
        <div style="padding:0px 200px;color:black;">
            @yield('content')
        </div>
    </div>
    <div style="clear:both;">

    </div>
    {{-- @includeif('partials._footer') --}}
    @stack('scripts')
  </body>
</html>
