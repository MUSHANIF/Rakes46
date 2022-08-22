<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent ">
      <div class="container">
        <a href="#" class="logo"><span>Dumas</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto justify-content-center">
            <li class="nav-item text-center justify-content-center">
              <a class="nav-link active" aria-current="page" href="#Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tiga">About</a>
            </li>
            @can('superadmin')
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selamat Datang,{{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/dashboard-admin">Dashboard</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              </li>
                
              </ul>
            </li>
            @elsecan('siswa')
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selamat Datang,{{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu bg-dark"  aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="pengaduan/home">keluhan!</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              </li>
                
              </ul>
            </li>
            @elsecan('kepala_sekolah')
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selamat Datang,{{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu bg-dark"  aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="pengaduan/home">keluhan!</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              </li>
                
              </ul>
            </li>
            @elsecan('wali_kelas')
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selamat Datang,{{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu bg-dark"  aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="pengaduan/home">keluhan!</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              </li>
                
              </ul>
            </li>
            @elsecan('orangtua')
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selamat Datang,{{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu bg-dark"  aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="pengaduan/home">keluhan!</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              </li>
                
              </ul>
            </li>
            @else
            
            <li class="nav-item">
                <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            </li>
             @endcan
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Login </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
