<div class="sidebar transition overlay-scrollbars animate__animated animate__slideInLeft">
    <div class="sidebar-content">
       <div id="sidebar">
          <div class="logo">

             <h2 class="mb-0"><img
               src="{{ asset('assets/images/loggorakes.png') }}"
               class="h-6 mr-3 sm:h-9"
               alt="Logo Rakes"
            /> </h2>

          </div>
 
          <ul class="side-menu">
             @if(Auth::user()->level == 5)
             <li>
                <a href="/dashboard" class="{{ Request::is('dashboard*') ? 'active' : ''}}"> <i class="bx bxs-dashboard icon"></i> Dashboard </a>
             </li>
             <li>
                <a href="/pertanyaan" class="{{ Request::is('pertanyaan*') ? 'active' : ''}}"> <i class="bx bxs-dashboard icon"></i> Data pertanyaan </a>
             </li>
             @elseif(Auth::user()->level == 4)
             <li>
                <a href="/dashboardkepala" class="{{ Request::is('dashboard*') ? 'active' : ''}}"> <i class="bx bxs-dashboard icon"></i> Dashboard </a>
             </li>
             @elseif(Auth::user()->level == 3)
             <li>
                <a href="/dashboardpuskesmas" class="{{ Request::is('dashboard*') ? 'active' : ''}}"> <i class="bx bxs-dashboard icon"></i> Dashboard </a>
             </li>
             @elseif(Auth::user()->level == 2)
             <li>
                <a href="/dashboardwali" class="{{ Request::is('dashboard*') ? 'active' : ''}}"> <i class="bx bxs-dashboard icon"></i> Dashboard </a>
             </li>
             @elseif(Auth::user()->level == 1)
             <li>
                <a href="/siswaid" class="{{ Request::is('siswaid*', 'kuisioner*', 'isijawaban*', 'editjawaban*') ? 'active' : ''}}"> <i class="bx bxs-dashboard icon"></i> Biodata siswa </a>
                @if ($jawabanlama > 0)
                <a href="/jawabanlama" class="{{ Request::is('jawabanlama*') ? 'active' : ''}}"> <i class='bx bxs-book-content icon'></i> Jawaban Tahun Lalu </a>
                @endif
             </li>
             @endif 

             @if (Auth::user()->level != 1)
             <li>
                <a href="#" class="{{ Request::is('dashboard*', 'pertanyaan*') ? '' : 'active'}}">
                   <i class="bx bx-columns icon"></i>
                   List
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
             @endif
          </ul>
       </div>
    </div>
 </div>
 