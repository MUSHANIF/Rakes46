@extends('layouts.dashboard') 
@section('isi')
<div class="main-content">
   <main>
      <div href="#" class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
         <div>
            <h2 class="mb-2 text-xl md:text-3xl text-center tracking-tight text-gray-900 dark:text-white">REKAM MEDIS KESEHATAN SISWA
               <br>
               SMKN 46 JAKARTA
            </h2>
            <h5 class="text-gray-900 text-center tracking-tight text-lg font-semibold">HISTORY {{ $tahun }}</h5>
            <div class="border border-slate-800 border-bottom-0 mb-4"></div>
         </div>
         <div>
            <div class="ml-4 text-black">
               @if ($jawabans->isNotEmpty())
                   
               <h3 class="text-black -mt-2 mb-3 text-capitalize text-xl md:text-2xl">Type 1</h3>                
               <div class="mb-8">
                  <h3 class="text-black -mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group A</h3>
                  @if (!empty($jawabans['1']['a']))
                     @foreach ($jawabans['1']['a'] as $jawaban)
                     <div class="mb-3 flex justify-between">
                        <h5 class="font-normal md:text-xl text-base">{{ $jawaban->pertanyaan->pertanyaan }}</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                           @if ($jawaban->jawaban == 'false')
                           <p class="text-danger mr-1.5 md:text-base text-sm">Tidak</p>
                           @else
                           <p class="text-primary ml-1.5 md:text-base text-sm">Ya</p>
                           @endif
                        </div>
                     </div>
                     @endforeach
                  @endif
               </div>
               
               <div class="mb-8">
                  <h3 class="text-black -mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group B</h3>
                  @if (!empty($jawabans['1']['b']))
                     @foreach ($jawabans['1']['b'] as $jawaban)
                     <div class="mb-3 flex justify-between">
                        <h5 class="font-normal md:text-xl text-base">{{ $jawaban->pertanyaan->pertanyaan }}</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                           @if ($jawaban->jawaban == 'false')
                           <p class="text-danger mr-1.5 md:text-base text-sm">Tidak</p>
                           @else
                           <p class="text-primary ml-1.5 md:text-base text-sm">Ya</p>
                           @endif
                        </div>
                     </div>
                     @endforeach
                  @endif
               </div>

               <div class="mb-8">
                  <h3 class="text-black -mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group C</h3>
                  @if (!empty($jawabans['1']['c']))
                     @foreach ($jawabans['1']['c'] as $jawaban)
                     <div class="mb-3 flex justify-between">
                        <h5 class="font-normal md:text-xl text-base">{{ $jawaban->pertanyaan->pertanyaan }}</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                           @if ($jawaban->jawaban == 'false')
                           <p class="text-danger mr-1.5 md:text-base text-sm">Tidak</p>
                           @else
                           <p class="text-primary ml-1.5 md:text-base text-sm">Ya</p>
                           @endif
                        </div>
                     </div>
                     @endforeach
                  @endif
               </div>

               <div class="mb-8">
                  <h3 class="text-black -mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group D</h3>
                  @if (!empty($jawabans['1']['d']))
                     @foreach ($jawabans['1']['d'] as $jawaban)
                     <div class="mb-3 flex justify-between">
                        <h5 class="font-normal md:text-xl text-base">{{ $jawaban->pertanyaan->pertanyaan }}</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                           @if ($jawaban->jawaban == 'false')
                           <p class="text-danger mr-1.5 md:text-base text-sm">Tidak</p>
                           @else
                           <p class="text-primary ml-1.5 md:text-base text-sm">Ya</p>
                           @endif
                        </div>
                     </div>
                     @endforeach
                  @endif
               </div>
               <div class="mb-8">
                  <h3 class="text-black -mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group E</h3>
                  @if (!empty($jawabans['1']['e']))
                     @foreach ($jawabans['1']['e'] as $jawaban)
                     <div class="mb-3 flex justify-between">
                        <h5 class="font-normal md:text-xl text-base">{{ $jawaban->pertanyaan->pertanyaan }}</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                           @if ($jawaban->jawaban == 'false')
                           <p class="text-danger mr-1.5 md:text-base text-sm">Tidak</p>
                           @else
                           <p class="text-primary ml-1.5 md:text-base text-sm">Ya</p>
                           @endif
                        </div>
                     </div>
                     @endforeach
                  @endif
               </div>
               <div class="mb-8">
                  <h3 class="text-black -mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group F</h3>
                  @if (!empty($jawabans['1']['f']))
                     @foreach ($jawabans['1']['f'] as $jawaban)
                     <div class="mb-3 flex justify-between">
                        <h5 class="font-normal md:text-xl text-base">{{ $jawaban->pertanyaan->pertanyaan }}</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                           @if ($jawaban->jawaban == 'false')
                           <p class="text-danger mr-1.5 md:text-base text-sm">Tidak</p>
                           @else
                           <p class="text-primary ml-1.5 md:text-base text-sm">Ya</p>
                           @endif
                        </div>
                     </div>
                     @endforeach
                  @endif
               </div>

               <div class="mb-8">
                  <h3 class="text-black -mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group G</h3>
                  @if (!empty($jawabans['1']['g']))
                     @foreach ($jawabans['1']['g'] as $jawaban)
                     <div class="mb-3 flex justify-between">
                        <h5 class="font-normal md:text-xl text-base">{{ $jawaban->pertanyaan->pertanyaan }}</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                           @if ($jawaban->jawaban == 'false')
                           <p class="text-danger mr-1.5 md:text-base text-sm">Tidak</p>
                           @else
                           <p class="text-primary ml-1.5 md:text-base text-sm">Ya</p>
                           @endif
                        </div>
                     </div>
                     @endforeach
                  @endif
               </div>

               <h3 class="text-black -mt-2 mb-3 text-capitalize text-xl md:text-2xl">Type 2</h3>                
               <div class="mb-8">
                  <h3 class="text-black -mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group A</h3>
                  @if (!empty($jawabans['2']['a']))
                     @foreach ($jawabans['2']['a'] as $jawaban)
                     <div class="mb-3 flex justify-between">
                        <h5 class="font-normal md:text-xl text-base">{{ $jawaban->pertanyaan->pertanyaan }}</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                           <p class="!text-blue-600 ml-1.5 md:text-base text-sm">{{ $jawaban->jawaban }}</p>
                        </div>
                     </div>
                     @endforeach
                  @endif
               </div>
               @else
               <h6 class="text-secondary text-center text-sm md:text-base">Kamu Tidak Memiliki Jawaban Tahun {{ $tahun }}!</h6>
               @endif

            </div>
         </div>
      </div>
   </main>
</div>
@endsection