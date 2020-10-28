{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        Blog
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('post.index') }}">Home <span class="sr-only">(current)</span></a>
          </li>
  
         
        </ul>
        <ul class="navbar-nav mr-auto">
  
        </ul>
  
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>
  
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('login') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
  
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
               
              @if (Auth::user()->role == 'admin' )
            <a href="" class="dropdown-item">DashBoard</a>
              @endif
              
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav> --}}



  <nav class="navbar navbar-expand-lg navbar-dark bg-secondario border-navbar">
    <div class="container">
    <a class="navbar-brand" href="{{route('post.index')}}"><img src="{{Storage::url('img/cook.png')}}" class="img-fluid img-logo" alt="logo">Food Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto text-white">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index', ['tag' => 1]) }}">PRIMI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index', ['tag' => 2]) }}">SECONDI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index', ['tag' => 3]) }}">CONTORNI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index', ['tag' => 4]) }}">DOLCI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-nav mx-5  text-white" href="{{route('post.create')}}">CREA NUOVO POST</a>
            
          </li>
        </ul>
      </div>

      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
          <a class="nav-link btn-login mr-3" href="{{ route('login') }}">{{ __('Accedi') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link btn-login" href="{{ route('register') }}">{{ __('Registrati') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('login') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
             
            @if (Auth::user()->role == 'admin' )
          <a href="" class="dropdown-item">DashBoard</a>
            @endif
            
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </nav>