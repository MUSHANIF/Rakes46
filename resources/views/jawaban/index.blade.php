@extends('layouts.dashboard') 
@section('isi')
<div class="main-content">
   <main>
      <div href="#" class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
         <div>
            <h2 class="mb-2 text-3xl text-center tracking-tight text-gray-900 dark:text-white">REKAM MEDIS KESEHATAN SISWA
               <br>
               SMKN 46 JAKARTA
            </h2>
            <div class="border border-slate-800 border-bottom-0 my-4"></div>
         </div>
         <div>
            <div class="ml-4 text-black">
               <form action="{{ route('kuisioner.store') }}" method="POST">
                  @csrf 
                  @foreach ($data as $key => $pertanyaan) 
                  @php
                   $p = 1 + $key   
                   @endphp
                  <input type="hidden" class="form-control" id="LocID" name="userID" required value="{{ Auth::user()->id }}" />
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
                              <input class="form-check-input" type="radio" name="jawaban[{{ $p }}]"  value="true" />
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