@extends('layouts.dashboard') 
@section('isi')
<div class="main-content">
   <main>
      @if (session()->has('have'))
         <div class="alert alert-info" role="alert">
            {{ session('have') }}
         </div>
      @endif
      <div class="card">
         <div class="card-title pt-4">
            <h2 class="text-center text-dark">
               REKAM MEDIS KESEHATAN SISWA
               <br />
               SMKN 46 JAKARTA
            </h2>
            <hr style="color: #4497b8" />
         </div>
         <div class="card-subtitle">
            <div class="row">
               <div class="col-12 ps-4 ms-4 mt-3">
                  @if ($jawabans[0]->pertanyaan->group == "a")
                  <h3 class="text-dark">Group A</h3> 
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
   </main>
</div>
@endsection
