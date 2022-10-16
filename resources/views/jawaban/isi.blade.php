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
            <div class="border border-slate-800 border-bottom-0 mb-4"></div>
         </div>
         <div>
            <div class="ml-4 text-black">
               @if (last(request()->segments()) != "isijawaban")
               <h3 class="text-black -mt-2 mb-3 text-capitalize">Group {{ last(request()->segments()) }}</h3>
               @endif
               @foreach ($jawabans as $jawaban)
               <div class="mb-3 flex justify-between">
                  <h5 class="font-normal">{{ $jawaban->pertanyaan->pertanyaan }}</h5>
                  <div class="grid grid-cols-2 gap-x-2">
                     @if ($jawaban->jawaban == 'false')
                     <p class="text-danger mr-1.5">Tidak</p>
                     @else
                     <p class="text-primary ml-1.5">Ya</p>
                     @endif
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </main>
</div>
@endsection
