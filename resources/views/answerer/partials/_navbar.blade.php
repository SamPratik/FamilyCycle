<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->

                    <li><a href="{{ route('answerer.home') }}">Home</a></li>
                    <li><a href="{{ route('answerer.messages') }}">Messages</a></li>

                    @auth('answerer')
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                              <img class="img-circle" src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim(Auth::guard('answerer')->user()->email) ) ) }}?d=mm&s=30" />
                              {{ Auth::guard('answerer')->user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu">
                              <img style="display:block;margin:auto;" class="img-circle" src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim(Auth::guard('answerer')->user()->email) ) ) }}?d=mm&s=100" />
                              <li class="divider"></li>
                              <li><a href="#">My Profile</a></li>
                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                    @endauth


            </ul>
        </div>
    </div>
</nav>
