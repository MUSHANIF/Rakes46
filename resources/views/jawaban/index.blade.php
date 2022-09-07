@extends('layouts.dashboard') 
@section('isi')
<div class="main-content text-dark">
   <main>
      @if (session()->has('dont'))
         <div class="alert alert-danger" role="alert">
            {{ session('dont') }}
         </div>
      @endif
      <div class="card container px-4">
         <div class="card-title pt-4 pb-2 mb-4">
            <h3 class="text-center">
               REKAM MEDIS KESEHATAN SISWA
               <br />
               SMKN 46 JAKARTA
            </h3>
            <hr style="color: #4497b8" />
         </div>
         <div class="card-subtitle">
            <div class="row">
               <div class="col-12">
                  <h4 class="pb-2">Riwayat Kesehatan Anak</h4>
               </div>
            </div>
         </div>
         <div class="body-card">
            <div class="" >
               <form action="{{ route('kuisioner.store') }}" method="POST">
                  @csrf 
                  <input type="hidden" class="form-control" id="LocID" name="userID" required value="{{ Auth::user()->id }}" />
                  @foreach ($data as $key => $pertanyaan) 
                  @php
                   $p = 1 + $key   
                   @endphp
                  <input type="hidden" name="jumlahPertanyaan" value="{{ $p }}">
                  <div class="row align-items-center">
                     <div class="col-lg-10 col-sm-7 mb-3">
                        <p class="text-dark" style="font-size: 19px">{{ $pertanyaan->pertanyaan }}</p>
                        <input type="hidden" class="form-control" id="LocID" name="pertanyaanID[{{ $p }}]" required value="{{ $pertanyaan->id }}" />
                     </div>
                     <div class="col-lg-2 col-sm-5 mb-3">
                        <div class="form-check form-check-inline">
                           <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="jawaban[{{ $p }}]" value="false" />
                              Tidak
                           </label>
                        </div>
                        <div class="form-check form-check-inline">
                           <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="jawaban[{{ $p }}]" value="true  " />
                              Ya
                           </label>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  <button style="background-color: #39b1e0; border: unset" type="submit" class="btn btn-primary mb-4">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </main>
</div>
@endsection