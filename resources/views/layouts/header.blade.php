

  <nav class="cyan accent-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{ url('/')}}" class="brand-logo"><h5>RuangBagi</h5></a>
     
       <ul class="right hide-on-med-and-down">
         @if (Auth::guest())
        <li><a href="{{ url('/register')}}">Register</a></li>
  
        <li><a href="{{ url('/login')}}">Login</a></li>
         @else
                      <li><a class="navbar-brand" href="{{ url('/add') }}">Upload File</a></li>
                        <li><a class="navbar-brand" href="{{ url('/show') }}">MyRoom</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ url('/')}}">Home</a></li>
      </ul>
      
    </div>
  </nav>
