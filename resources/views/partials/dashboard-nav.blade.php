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
                <li >
                    <a href="/dashboard-admin" class="active py-1">
                        <span class="sidebar-menu-logo">
                            <i class="bi bi-house-door-fill"></i>
                        </span>
                        <span class="sidebar-menu-text">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li >
                    <a href="/pertanyaan" class="py-3">
                        <span>
                            <i class="bi bi-card-list"></i>
                        </span>
                        <span class="sidebar-menu-text">
                            Data Pertanyaan
                        </span>
                    </a>
                </li>
                <li >
                    <hr class="dropdown-divider text-white">
                </li>
            @endif
           

           

            @if (Auth::user()->level != 1)
            
                {{-- <li class="nav-item text-white dropdown">
                    <a class="nav-link px-3 sidebar-link collapsed" 
                        data-bs-toggle="collapse" 
                        href="#collapseExample" role="button" 
                        aria-expanded="false" data-toggle="collapse" data-target="#submenu1" aria-controls="collapseExample">
                    <span class="sidebar-menu-logo">
                        <i class="bi bi-person-fill"></i>
                    </span>
                        <span>   
                            List
                        </span>
                        <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
                 
                        
                    </a> 
                 
                    
                </li> --}}
                <li class="dropdown">
                    <a class="collapsed py-3" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" role="button" data-toggle="collapse" data-target="#submenu1">
                        <i class="bi bi-person-fill"></i>
                        <span>List</span></a>
                    </a>
                    @if (Auth::user()->level == 5)
                    <ul class="dropdown-menu collapse border-0" style="background-color: rgb(57, 177, 224);" >
                        <li><a class="dropdown-item" href="/kepala_sekolah">Kepala sekolah</a></li>
                        <li><a class="dropdown-item" href="/puskesmas">Puskesmas</a></li>
                        <li><a class="dropdown-item" href="/wali_kelas">wali kelas</a></li>
                       
                        <li><a class="dropdown-item" href="/siswa">siswa</a></li>
                    </ul>
                    @elseif(Auth::user()->level == 4)
                    <ul class="dropdown-menu collapse border-0" style="background-color: rgb(57, 177, 224);" >
                        <li><a class="dropdown-item" href="/puskesmaskepala">Puskesmas</a></li>
                        <li><a class="dropdown-item" href="/wali_kelaskepala">wali kelas</a></li>
                        <li><a class="dropdown-item" href="/siswakepala">Data Kesehatan Siswa</a></li>
                    </ul>
                    
                    @elseif(Auth::user()->level == 3)
                    <ul class="dropdown-menu collapse border-0" style="background-color: rgb(57, 177, 224);" >                        
                        <li><a class="dropdown-item" href="/siswapuskesmas">Data kesehatan Siswa</a></li>
                    </ul>
                    
                    @elseif (Auth::user()->level == 2)
                    <ul class="dropdown-menu collapse border-0" style="background-color: rgb(57, 177, 224);" >
                        <li><a class="dropdown-item" href="/siswawali">Data kesehatan Siswa</a></li>
                    </ul>
                    @endif

                    <ul class="dropdown-menu collapse border-0" style="background-color: rgb(57, 177, 224);" >
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

            @else
                <li>
                    <a href="/siswaid" class="py-3">
                        <span class="sidebar-menu-logo">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <span>
                            Biodata Siswa
                        </span>
                    </a>
                </li>
                <li >
                    <a href="/dataorangtua" class="py-3">
                        <span class="sidebar-menu-logo">
                            <i class="bi bi-people-fill"></i>
                        </span>
                        <span>
                            Data Orang Tua Siswa
                        </span>
                    </a>
                </li> 
                <li>
                    {{-- <a href="{{ route('step1') }}"  class="py-3">
                        <span class="sidebar-menu-logo">
                            <i class="bi bi-card-checklist"></i>
                        </span>
                        <span>
                            Rapor Kesehatan 
                        </span>
                    </a> --}}
                    <a href={{ Auth::user()->jawaban ? '/isikuisioner' : '/kuisioner'}}  class="py-3">
                        <span class="sidebar-menu-logo">
                            <i class="bi bi-card-checklist"></i>
                        </span>
                        <span>
                            Rapor Kesehatan 
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
            {{ $title ?? config('app.name')}}
            {{-- Dashboard --}}
        </h2>
        {{-- <div class="search-wrapper">
            <span><i class="bi bi-search"></i></span>
            <input type="search" placeholder="search">
        </div> --}}
        <div class="user-wrapper">
            <div class="dropdown">
                <div class="dropdown" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="pe-4">
                        <h4>Selamat Datang {{ ucfirst(Auth::user()->name) }}</h4>
                        {{-- <small>{{ Auth::user()->level }}</small> --}}
                    </div>
                    <img src="{{ asset('assets/images/avatar.png') }}" alt="" width="45px" height="45px">
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
