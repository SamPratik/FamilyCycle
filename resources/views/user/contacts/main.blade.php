@includeif('partials._header')
@stack('styles')
<style media="screen">
    .content {
      position:relative;
      top:100px;
      color: black;
      padding: 0px 150px;
    }
</style>

<body>
@includeif('partials._navbar')
<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
@includeif('partials._footer')
@stack('scripts')
</body>
