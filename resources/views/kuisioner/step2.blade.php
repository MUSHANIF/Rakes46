@extends('layouts.dashboard') 
@section('isi')
<div class="main-content mt-5">
   <main>
      @if (session()->has('dont'))
         <div class="alert alert-danger" role="alert">
            {{ session('dont') }}
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
         <div class="body-card ms-5 me-5">
            <div class="container" style="position: relative">
               <form action="{{ route('step2.store') }}" method="POST">
                  @csrf 
                  <input type="hidden" class="form-control" id="LocID" name="userID" required value="{{ Auth::user()->id }}" />
                  @foreach ($datas as $key => $pertanyaan) 
                  @php
                   $p = 1 + $key   
                   @endphp
                   <input type="hidden" name="jumlahPertanyaanStep2" value="{{ $p }}">
                  <div class="row">
                     <div class="col-lg-10 col-sm-7 mb-4">
                        <p style="font-size: 20px">{{ $pertanyaan->pertanyaan }}</p>
                        <input type="hidden" class="form-control" id="LocID" name="pertanyaanID[{{ $pertanyaan->id }}]" required value="{{ $pertanyaan->id }}" />
                     </div>
                     <div class="col-lg-2 col-sm-5 mb-4">
                        <div class="form-check form-check-inline">
                           <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="jawaban[{{ $pertanyaan->id }}]" value="false" />
                              Tidak
                           </label>
                        </div>
                        <div class="form-check form-check-inline">
                           <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="jawaban[{{ $pertanyaan->id }}]" value="true  " />
                              Ya
                           </label>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  <div class="d-flex justify-content-end">
                     <a href="{{ route("step1") }}" style="border: unset" type="submit" class="btn btn-danger mt-4 mb-5 me-2">Kembali</a>
                     <button style="border: unset" type="submit" class="btn btn-success mt-4 mb-5">Kirim</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </main>
</div>
@endsection
