@extends('layouts.dashboard')

@section('isi')
<div class="main-content">
    <main>
        <div class="cards">
            @if (Auth::user()->level == '5')
            <div class="card-single">
                <div>
                    <h1>{{ $user }}</h1>
                    <span>Data Siswa</span>
                </div>
                <div>
                    <span><i class="bi bi-graph-up-arrow"></i></span>
                </div>
            </div>
            {{-- <div class="card-single">
                <div>
                    <h1>{{ $orangtua }}</h1>
                    <span>Data Orang Tua</span>
                </div>
                <div>
                    <span><i class="bi bi-people-fill"></i></span>
                </div>
            </div> --}}
            <div class="card-single">
                <div>
                    <h1>{{ $wali }}</h1>
                    <span>Wali Kelas</span>
                </div>
                <div>
                    <span><i class="bi bi-clipboard-fill"></i></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>{{ $kepala }}</h1>
                    <span>Kepala Sekolah</span>
                </div>
    
                <div>
                    <span><i class="bi bi-clipboard-plus-fill"></i></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>{{ $puskesmas }}</h1>
                    <span>Puskesmas</span>
                </div>
    
                <div>
                    <span><i class="bi bi-clipboard-plus-fill"></i></span>
                </div>
            </div>

            @elseif (Auth::user()-> level == 4)
            <div class="card-single">
                <div>
                    <h1>{{ $puskesmas }}</h1>
                    <span>Puskesmas</span>
                </div>
    
                <div>
                    <span><i class="bi bi-clipboard-plus-fill"></i></span>
                </div>
            </div>
            @endif
        </div>
    </main>
</div>

@endsection
