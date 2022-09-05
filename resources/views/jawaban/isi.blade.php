@extends('layouts.dashboard') 
@section('isi')
<div class="main-content mt-5">
   <main>
      @if (session()->has('have'))
         <div class="alert alert-info" role="alert">
            {{ session('have') }}
         </div>
      @endif
      <div class="card">
         <div class="card-title pt-4 pb-2 mb-4">
            <h2 class="text-center">
               REKAM MEDIS KESEHATAN SISWA
               <br />
               SMKN 46 JAKARTA
            </h2>
            <hr style="color: #4497b8" />
         </div>
         <div class="card-subtitle">
            <div class="row">
               <div class="col-12 ps-4 ms-4 mt-3">
                  <h4 class="pb-2">Riwayat Kesehatan Anak</h4>
               </div>
            </div>
         </div>
         <div class="body-card">
            <div class="container ms-4">
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
   </main>
</div>
@endsection
