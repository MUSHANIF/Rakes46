<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h2>
            <span class="text">
                Rakes 46
            </span>
        </h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            @if(Auth::user()->level == 5) 
                <li>
                    <a href="/dashboard-admin" class="active">
                        <span class="sidebar-menu-logo">
                            <i class="bi bi-house-door-fill"></i>
                        </span>
                        <span class="sidebar-menu-text">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider text-white">
                </li>
            @endif
           
            <li class="nav-item dropdown">
                <a class="nav-link px-3 sidebar-link collapsed" 
                    data-bs-toggle="collapse" 
                    href="#collapseExample" role="button" 
                    aria-expanded="false" data-toggle="collapse" aria-controls="collapseExample">
                   <span class="sidebar-menu-logo">
                    <i class="bi bi-person-fill"></i>
                   </span>
                    <span>
                        List
                    </span>
                    <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
                    
                </a> 
                
                <div class="dropdown-menu collapse" id="collapseExample">
                    <div>
                        <ul class="navbar-nav ps-3 " id="submenu1" aria-labelledby="navbarDropdownMenuLink"> 
                            @if (Auth::user()->level == 5)
                            <li><a class="dropdown-item" href="/kepala_sekolah">Kepala sekolah</a></li>
                            <li><a class="dropdown-item" href="/puskesmas">Puskesmas</a></li>
                            <li><a class="dropdown-item" href="/wali_kelas">wali kelas</a></li>
                            <li><a class="dropdown-item" href="/orangtua">orang tua</a></li>
                            <li><a class="dropdown-item" href="/siswa">siswa</a></li>
                            @elseif(Auth::user()->level == 4)
                            <li><a class="dropdown-item" href="/puskesmas">Puskesmas</a></li>
                            <li><a class="dropdown-item" href="/wali_kelas">wali kelas</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </li>
         
            @if (Auth::user()->level == 4)
            <a href="/siswapuskesmas">
                <span class="sidebar-menu-logo">
                 <i class="bi bi-person-fill"></i>
                </span>
                 <span>
                     Data kesehatan Siswa
                 </span>
                 <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
                 
             </a>                
            @endif
        
            @if (Auth::user()->level == 3)
            <a href="/siswapuskesmas">
                <span class="sidebar-menu-logo">
                 <i class="bi bi-person-fill"></i>
                </span>
                 <span>
                     Data kesehatan Siswa
                 </span>
                 <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
                 
             </a>                
            @endif
            @if (Auth::user()->level == 5)
                <li>
                    <a href="/pertanyaan">
                        <span>
                            <i class="bi bi-card-list"></i>
                        </span>
                        <span>
                            Data Pertanyaan
                        </span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
<div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span><i class="bi bi-list"></i></span>
            </label>
            Dashboard
        </h2>
        <div class="search-wrapper">
            <span><i class="bi bi-search"></i></span>
            <input type="search" placeholder="search">
        </div>
        <div class="user-wrapper">
            <div class="dropdown">
                <div class="dropdown" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="" width="30px" height="30px">
                    <div>
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>{{ Auth::user()->level }}</small>
                    </div>
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                    <li><a class="dropdown-item" href="#">Yakin mau keluar?</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                    </li>
                    <hr class="dropdown-divider">
                    <li><a class="dropdown-item" href="/">Kembali ke Home</a></li>
                </ul>
            </div>
        </div>
    </header>
</div>
