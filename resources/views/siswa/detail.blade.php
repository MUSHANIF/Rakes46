@extends('layouts.dashboard') 
@section('isi')
<div class="main-content">
   <main>
@if ($jawabans->isNotEmpty())
      @if (session()->has('have'))
         <div class="alert alert-info" role="alert">
            {{ session('have') }}
         </div>
      @endif
      <h2 class="m-3 font-semibold text-center text-dark text-gray-700 dark:text-gray-200">Detail Informasi</h2>

               <div class="mb-8">
                  <div class="flex gap-x-6">
                     @foreach($siswa as $ite)
                        <div class="text-gray-800 text-dark text-sm font-normal w-full px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-gray-100">
                            <h4 class="text-gray-700">Profil Anak Tersebut:</h4>
                            <div class="text-dark">
                               <div class="grid grid-cols-2">
                                 <h5>Nama </h5>
                                 <h5>: {{ $ite->nama_lengkap }}</h5>
                               </div>
                               <div class="grid grid-cols-2">
                                 <h5>NISN </h5>
                                 <h5>: {{ $ite->nisn }}</h5>
                               </div>
                               <div class="grid grid-cols-2">
                                 <h5>Tanggal Lahir </h5>
                                 <h5>: {{ $ite->tgl_lahir}}</h5>
                               </div>
                               <div class="grid grid-cols-2">
                                 <h5>Jenis Kelamin </h5>
                                 <h5>: {{ $ite->jns_kelamin == "L" ? "Laki-Laki" : "Perempuan" }}</h5>
                               </div>
                            </div>
                        </div>

                        @foreach($ortu as $ite)
                        <div class="text-gray-800 text-sm font-normal w-full px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-gray-100">
                            <h4 class="text-gray-700">Profil Orangtua:</h4>
                            <div class="text-dark">
                              <div class="grid grid-cols-2">
                                <h5>Nama Ayah</h5>
                                <h5 class="capitalize">: {{ $ite->nama_ayah }}</h5>
                              </div>
                              <div class="grid grid-cols-2">
                                <h5>Nama Ibu</h5>
                                <h5 class="capitalize">: {{ $ite->nama_ibu }}</h5>
                              </div>
                              <div class="grid grid-cols-2">
                                <h5>Pekerjaan Ayah </h5>
                                <h5 class="capitalize">: {{ $ite->pekerjaan_ayah}}</h5>
                              </div>
                              <div class="grid grid-cols-2">
                                <h5>Pekerjaan Ibu </h5>
                                <h5 class="capitalize">: {{ $ite->pekerjaan_ibu  }}</h5>
                              </div>
                           </div>
                        </div>
                        @endforeach
                      @endforeach
                     </div>
                  </div>
      <div class="card">
         <div class="card-title pt-4">
            <h2 class="text-center text-dark">
               REKAM MEDIS KESEHATAN SISWA TERSEBUT
               <br />
               SMKN 46 JAKARTA
            </h2>
            <hr style="color: #4497b8" />
         </div>
         <div class="card-subtitle">
            <div class="row">
               <div class="col-12 ps-4 ms-4 mt-3">
                  @if ($jawabans[0]->pertanyaan->group == "a")
                  <h3 class="text-dark"></h3> 
                  @endif
                  @if ($jawabans[0]->pertanyaan->group == "b")
                  <h3 class="text-dark">Group B</h3> 
                  @endif
                  @if ($jawabans[0]->pertanyaan->group == "c")
                  <h3 class="text-dark">Group C</h3> 
                  @endif
               </div>
            </div>
         </div>
         <div class="body-card mb-3">
            <div class="container ms-4 text-dark">
               @foreach ($jawabans as $jawaban)
               <div class="mb-3">
                  <h5>{{ $jawaban->pertanyaan->pertanyaan }}</h5>
                  @if ($jawaban->jawaban == 'false')
                  <p class="text-danger">Tidak</p>
                  @else
                  <p class="text-primary">Ya</p>
                  @endif
               </div>
               @endforeach
            </div>
         </div>
      </div>
      @else
      <div id="error">
        <div class="container text-center">
        <div class="pt-2">
            <h1 class="errors-titles text-primary">404</h1>
            <p>Data Belom diisi oleh siswa!</p>
          
          </div>
        </div>
    </div>
@endif
   </main>
</div>
@endsection
