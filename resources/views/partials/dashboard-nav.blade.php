<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h2>
            <span>
                Rakes 46
            </span>
        </h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="" class="active">
                    <span>
                        <i class="bi bi-house-door-fill"></i>
                    </span>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider text-white">
            </li>
            <li>
                <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                   <span>
                    <i class="bi bi-person-fill"></i>
                   </span>
                    <span>
                        List
                    </span>
                    <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
                    
                </a>
                <div class="collapse" id="collapseExample">
                    <div >
                        <ul class="navbar-nav ps-3 "> 
                            <li><a class="dropdown-item" href="/kepala_sekolah">Kepala sekolah</a></li>
                            <li><a class="dropdown-item" href="/puskesmas">Puskesmas</a></li>
                            <li><a class="dropdown-item" href="/wali_kelas">wali kelas</a></li>
                            <li><a class="dropdown-item" href="/orangtua">orang tua</a></li>
                            <li><a class="dropdown-item" href="/siswa">siswa</a></li>
                        </ul>
                    </div>
                </div>
           </li>
            <li>
                <a href="">
                    <span>
                        <i class="bi bi-card-list"></i>
                    </span>
                    <span>
                        Data Pertanyaan
                    </span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>
                        <i class="bi bi-house-door-fill"></i>
                    </span>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>
                        <i class="bi bi-house-door-fill"></i>
                    </span>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>
                        <i class="bi bi-table"></i>
                    </span>
                    <span>
                        Laporan
                    </span>
                </a>
            </li>
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
            <img src="" alt="" width="30px" height="30px">
            <div>
                <h4>{{ Auth::user()->name }}</h4>
                <small>{{ Auth::user()->level }}</small>
            </div>
        </div>
    </header>
</div>


