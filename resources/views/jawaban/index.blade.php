@extends('layouts.dashboard') @section('isi')
<div class="main-content">
   <main>
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
               <form action="{{ route('kuisioner.store') }}" method="POST">
                  @csrf @foreach ($data as $key => $pertanyaan) 
                  @php
                   $p = 1+$key   
                  @endphp
                  <div class="row">
                     <div class="col-lg-10 col-sm-7 mb-4">
                        <p style="font-size: 20px">{{ $pertanyaan->pertanyaan }}</p>
                     </div>
                     <div class="col-lg-2 col-sm-5 mb-4">
                        <div class="form-check form-check-inline">
                           <input type="hidden" class="form-control" id="LocID" name="userID" required value="{{ Auth::user()->id }}" />
                           <input class="form-check-input" type="radio" name="jawaban[pertanyaan{{ $p }}]" id="inlineRadio1" value="0" />
                           <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="jawaban[pertanyaan{{ $p }}]" id="inlineRadio2" value="1" />
                           <label class="form-check-label" for="inlineRadio2">Ya</label>
                        </div>
                     </div>
                  </div>
                  @endforeach {{--
                  <nav aria-label="Page navigation example">
                     <ul class="pagination">
                        <li class="page-item">
                           <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                           </a>
                        </li>

                        <li class="page-item">
                           <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                           </a>
                        </li>
                     </ul>
                  </nav>
                  --}}
                  <button style="background-color: #39b1e0; border: unset" type="submit" class="btn btn-primary mt-4 mb-5">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </main>
</div>
@endsection
