@extends('layouts.dashboard') 
@section('isi')
<div class="main-content">
   <main>
      <div class="card">
         <div class="card-title pt-4">
            <h2 class="text-center text-dark">
               REKAM MEDIS KESEHATAN SISWA
               <br />
               SMKN 46 JAKARTA
            </h2>
            <hr style="color: #4497b8" />
         </div>
         <div class="body-card mb-3">
            <div class="container ms-4 text-black">
               @if (last(request()->segments()) != "isijawaban")
               <h3 class="text-black -mt-2 mb-3 text-capitalize">Group {{ last(request()->segments()) }}</h3>
               @endif
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
         {{-- <div class="text-center my-2">
            <a href="/kuisioner" class="text-dark next-jawaban fs-5">&laquo; Next Jawaban &raquo;</a>
         </div> --}}
      </div>
   </main>
</div>
@endsection
