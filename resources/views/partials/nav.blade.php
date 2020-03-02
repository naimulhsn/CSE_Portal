{{--Navbar--}}
<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark mb-0" style="z-index:9999">
    <div class="container-fluid">
      <a href="/" class="navbar-brand">
        <h4>BSMRSTU CSE Portal</h4>
      </a>


      <ul class="navbar-nav ">
        @guest
        <li class="nav-item mr-2">
          <a class="btn btn-secondary" href="{{ route('login') }}">{{ __('Log in') }}</a>
        </li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="btn btn-secondary text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Register
            <span class="caret"></span>
          </a>
          <div class="dropdown-menu bg-dark dropdown-menu-right">
            <a class="dropdown-item bg-dark text-white" href="/studentSignup">As Student</a>
            <a class="dropdown-item bg-dark text-white" href="/teacherSignup">As Teacher</a>
          </div>
        </li>
        @else
          <li class="nav-item mr-2">
          <a class="btn btn-secondary" href="{{route('contents.create')}}">Upload Files</a>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class=" text-white btn btn-success" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <i class="fa fa-user"></i>  
                {{Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profile</a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                
            </div>
        </li>
        @endguest
      </ul>
    </div>
  </nav>