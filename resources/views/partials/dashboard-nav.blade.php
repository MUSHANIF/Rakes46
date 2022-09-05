<div class="sidebar transition overlay-scrollbars animate__animated animate__slideInLeft">
    <div class="sidebar-content">
       <div id="sidebar">
          <div class="logo">
             <h2 class="mb-0"><i class="bi bi-heart-pulse-fill"></i></h2>
          </div>
 
          <ul class="side-menu">
             @if(Auth::user()->level == 5)
             <li>
                <a href="/dashboard" class="active"> <i class="bx bxs-dashboard icon"></i> Dashboard </a>
             </li>
             <li>
                <a href="/pertanyaan"> <i class="bx bxs-dashboard icon"></i> Data pertanyaan </a>
             </li>
             @elseif(Auth::user()->level == 4)
             <li>
                <a href="/dashboardkepala" class="active"> <i class="bx bxs-dashboard icon"></i> Dashboard </a>
             </li>
             @elseif(Auth::user()->level == 3)
             <li>
                <a href="/dashboardpuskesmas" class="active"> <i class="bx bxs-dashboard icon"></i> Dashboard </a>
             </li>
             @elseif(Auth::user()->level == 2)
             <li>
                <a href="/dashboardwali" class="active"> <i class="bx bxs-dashboard icon"></i> Dashboard </a>
             </li>
             @elseif(Auth::user()->level == 1)
             <li>
                <a href="/siswaid" class="active"> <i class="bx bxs-dashboard icon"></i> Biodata siswa </a>
             </li>
             @endif 
 
             @if (Auth::user()->level != 1)
 
             <li>
                <a href="#">
                   <i class="bx bx-columns icon"></i>
                   list
                   <i class="bx bx-chevron-right icon-right"></i>
                </a>
                @if (Auth::user()->level == 5)
 
                <ul class="side-dropdown">
                   <li><a href="/kepala_sekolah">Kepala Sekolah</a></li>
                   <li><a href="/puskesmas">Puskesmas</a></li>
                   <li><a href="/wali_kelas">Wali Kelas</a></li>
                   <li><a href="/siswa">Siswa</a></li>
                </ul>
                @elseif (Auth::user()->level == 4)
                <ul class="side-dropdown">
                   <li><a href="/puskesmaskepala">Puskesmas</a></li>
                   <li><a href="/wali_kelaskepala">Wali Kelas</a></li>
                   <li><a href="/siswakepala">Siswa</a></li>
                </ul>
                @elseif (Auth::user()->level == 3)
                <ul class="side-dropdown">
                   <li><a href="/siswapuskesmas">Siswa</a></li>
                </ul>
                @elseif (Auth::user()->level == 2)
                <ul class="side-dropdown">
                   <li><a href="/siswawali">Siswa</a></li>
                </ul>
                @endif
             </li>
             @else
             {{-- <li>
                <a href="/dataorangtua"> <i class="bx bxs-dashboard icon"></i>dataorangtua </a>
             </li>
             <li>
                <a href="{{ Auth::user()->jawaban ? '/isikuisioner' : '/kuisioner'}}"> <i class="bx bxs-dashboard icon"></i>pertanyaan </a>
             </li> --}}
 
             @endif
          </ul>
       </div>
    </div>
 </div>
 