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
               @if (last(request()->segments()) != "isijawaban")
               <h3 class="text-black -mt-2 mb-3 text-capitalize">Group {{ last(request()->segments()) }}</h3>
               @endif
               <form action="/updatejawaban" method="POST">
                  @csrf 
                  <input type="hidden" class="form-control" id="LocID" name="userID" required value="{{ Auth::user()->id }}" />
                  <input type="hidden" class="form-control" name="group" required value="{{ $jawabans[0]->pertanyaan->group }}" />
                  <input type="hidden" class="form-control" name="type" required value="{{ $jawabans[0]->pertanyaan->type }}" />
                  @foreach ($jawabans as $key => $jawaban) 
                  @php
                   $p = 1 + $key   
                  @endphp
                  <input type="hidden" name="jumlahPertanyaan" value="{{ $p }}">
                  <div class="row align-items-center">
                     <div class="col-lg-10 col-sm-7 mb-3">
                        <p class="text-dark" style="font-size: 19px">{{ $jawaban->pertanyaan->pertanyaan }}</p>
                        <input type="hidden" class="form-control" id="LocID" name="pertanyaanID[{{ $p }}]" required value="{{ $jawaban->pertanyaan->id }}" />
                     </div>
                     <div class="col-lg-2 col-sm-5 mb-3">
                        @if ($jawabans[0]->pertanyaan->type == 1)
                        <div class="form-check form-check-inline">
                           <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="jawaban[{{ $p }}]" {{ $jawaban->jawaban == "false" ? 'checked' : '' }} value="false" />
                              Tidak
                           </label>
                        </div>
                        <div class="form-check form-check-inline">
                           <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="jawaban[{{ $p }}]" {{ $jawaban->jawaban == "true" ? 'checked' : '' }} value="true" />
                              Ya
                           </label>
                        </div>
                        @else
                        <input required class="form-control form-control-sm" type="text" name="jawaban[{{ $p }}]" value="{{ $jawaban->jawaban }}" placeholder="Ketikkan disini" aria-label="default input example">
                        @endif
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