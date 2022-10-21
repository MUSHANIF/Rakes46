@extends('layouts.dashboard') 
@section('isi')
<div class="main-content">
   <main>
      @if (!empty($siswa) && !empty($ortu))
         <h2 class="my-10 font-semibold text-center text-dark text-gray-700 dark:text-gray-200 text-2xl md:text-3xl">Detail Informasi</h2>
         
         <div class="mb-8">
            <div class="md:flex gap-x-6">
               <div class="text-gray-800 text-sm font-normal w-full px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-gray-100">
                  <h4 class="text-gray-700 text-xl md:text-2xl">Profil Siswa:</h4>
                  <div class="">
                     <div class="grid grid-cols-2">
                        <h5 class="text-base md:text-xl">Nama</h5>
                        <h5 class="text-base md:text-xl">: {{ $siswa->nama_lengkap }}</h5>
                     </div>
                     <div class="grid grid-cols-2">
                        <h5 class="text-base md:text-xl">NISN</h5>
                        <h5 class="text-base md:text-xl">: {{ $siswa->nisn }}</h5>
                     </div>
                     <div class="grid grid-cols-2">
                        <h5 class="text-base md:text-xl">Tanggal Lahir</h5>
                        <h5 class="text-base md:text-xl">: {{ $siswa->tgl_lahir }}</h5>
                     </div>
                     <div class="grid grid-cols-2">
                        <h5 class="text-base md:text-xl">Jenis Kelamin</h5>
                        <h5 class="text-base md:text-xl">: {{ $siswa->jns_kelamin == "L" ? "Laki-Laki" : "Perempuan" }}</h5>
                     </div>
                  </div>
               </div>
         
               <div class="text-gray-800 text-sm font-normal w-full px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-gray-100">
                  <h4 class="text-gray-700 text-xl md:text-2xl">Profil Orangtua Siswa:</h4>
                  <div class="">
                     <div class="grid grid-cols-2">
                        <h5 class="text-base md:text-xl">Nama Ayah</h5>
                        <h5 class="text-base md:text-xl capitalize">: {{ $ortu->nama_ayah }}</h5>
                     </div>
                     <div class="grid grid-cols-2">
                        <h5 class="text-base md:text-xl">Nama Ibu</h5>
                        <h5 class="text-base md:text-xl capitalize">: {{ $ortu->nama_ibu }}</h5>
                     </div>
                     <div class="grid grid-cols-2">
                        <h5 class="text-base md:text-xl">Pekerjaan Ayah</h5>
                        <h5 class="text-base md:text-xl capitalize">: {{ $ortu->pekerjaan_ayah}}</h5>
                     </div>
                     <div class="grid grid-cols-2">
                        <h5 class="text-base md:text-xl">Pekerjaan Ibu</h5>
                        <h5 class="text-base md:text-xl capitalize">: {{ $ortu->pekerjaan_ibu }}</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @if ($jawabans->isNotEmpty())
         
         <div class="swiper">

            <div class="swiper-wrapper">
               {{-- Pertanyaan Type 1 Group A --}}
               @if ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'a')->isNotEmpty())
               <div class="swiper-slide">
                  <div href="#" class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                     <div>
                        <h2 class="mb-2 text-xl md:text-3xl text-center tracking-tight text-gray-900 dark:text-white">
                           REKAM MEDIS KESEHATAN SISWA
                           <br />
                           SMKN 46 JAKARTA
                        </h2>
                        <div class="border border-slate-800 border-bottom-0 mb-4"></div>
                     </div>
               
                     <div>
                        <div class="ml-4 text-black">
                           <h3 class="-mt-2 mb-3 text-capitalize text-xl md:text-2xl">Type 1</h3>
                           <div class="mb-8">
                              <h3 class="-mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group A</h3>
                              @foreach ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'a') as $jawaban)
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
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endif
               
               {{-- Pertanyaan Type 1 Group B --}}
               @if ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'b')->isNotEmpty())
               <div class="swiper-slide">
                  <div href="#" class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                     <div>
                        <h2 class="mb-2 text-xl md:text-3xl text-center tracking-tight text-gray-900 dark:text-white">
                           REKAM MEDIS KESEHATAN SISWA
                           <br />
                           SMKN 46 JAKARTA
                        </h2>
                        <div class="border border-slate-800 border-bottom-0 mb-4"></div>
                     </div>
               
                     <div>
                        <div class="ml-4 text-black">
                           <div class="mb-8">
                              <h3 class="-mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group B</h3>
                              @foreach ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'b') as $jawaban)
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
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endif
               
               {{-- Pertanyaan Type 1 Group C --}}
               @if ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'c')->isNotEmpty())
               <div class="swiper-slide">
                  <div href="#" class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                     <div>
                        <h2 class="mb-2 text-xl md:text-3xl text-center tracking-tight text-gray-900 dark:text-white">
                           REKAM MEDIS KESEHATAN SISWA
                           <br />
                           SMKN 46 JAKARTA
                        </h2>
                        <div class="border border-slate-800 border-bottom-0 mb-4"></div>
                     </div>
               
                     <div>
                        <div class="ml-4 text-black">
                           <div class="mb-8">
                              <h3 class="-mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group C</h3>
                              @foreach ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'c') as $jawaban)
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
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endif
               
               {{-- Pertanyaan Type 1 Group D --}}
               @if ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'd')->isNotEmpty())
               <div class="swiper-slide">
                  <div href="#" class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                     <div>
                        <h2 class="mb-2 text-xl md:text-3xl text-center tracking-tight text-gray-900 dark:text-white">
                           REKAM MEDIS KESEHATAN SISWA
                           <br />
                           SMKN 46 JAKARTA
                        </h2>
                        <div class="border border-slate-800 border-bottom-0 mb-4"></div>
                     </div>
               
                     <div>
                        <div class="ml-4 text-black">
                           <div class="mb-8">
                              <h3 class="-mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group D</h3>
                              @foreach ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'd') as $jawaban)
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
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endif

               {{-- Pertanyaan Type 1 Group E --}}
               @if ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'e')->isNotEmpty())
               <div class="swiper-slide">
                  <div href="#" class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                     <div>
                        <h2 class="mb-2 text-xl md:text-3xl text-center tracking-tight text-gray-900 dark:text-white">
                           REKAM MEDIS KESEHATAN SISWA
                           <br />
                           SMKN 46 JAKARTA
                        </h2>
                        <div class="border border-slate-800 border-bottom-0 mb-4"></div>
                     </div>
               
                     <div>
                        <div class="ml-4 text-black">
                           <div class="mb-8">
                              <h3 class="-mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group E</h3>
                              @foreach ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'e') as $jawaban)
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
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endif

               {{-- Pertanyaan Type 1 Group F --}}
               @if ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'f')->isNotEmpty())
               <div class="swiper-slide">
                  <div href="#" class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                     <div>
                        <h2 class="mb-2 text-xl md:text-3xl text-center tracking-tight text-gray-900 dark:text-white">
                           REKAM MEDIS KESEHATAN SISWA
                           <br />
                           SMKN 46 JAKARTA
                        </h2>
                        <div class="border border-slate-800 border-bottom-0 mb-4"></div>
                     </div>
               
                     <div>
                        <div class="ml-4 text-black">
                           <div class="mb-8">
                              <h3 class="-mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group F</h3>
                              @foreach ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'f') as $jawaban)
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
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endif
               
               {{-- Pertanyaan Type 1 Group G --}}
               @if ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'g')->isNotEmpty())
               <div class="swiper-slide">
                  <div href="#" class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                     <div>
                        <h2 class="mb-2 text-xl md:text-3xl text-center tracking-tight text-gray-900 dark:text-white">
                           REKAM MEDIS KESEHATAN SISWA
                           <br />
                           SMKN 46 JAKARTA
                        </h2>
                        <div class="border border-slate-800 border-bottom-0 mb-4"></div>
                     </div>
               
                     <div>
                        <div class="ml-4 text-black">
                           <div class="mb-8">
                              <h3 class="-mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group G</h3>
                              @foreach ($jawabans->where('pertanyaan.type', '1')->where('pertanyaan.group', 'g') as $jawaban)
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
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endif

               {{-- Pertanyaan Type 2 Group A --}}
               @if ($jawabans->where('pertanyaan.type', '2')->where('pertanyaan.group', 'a')->isNotEmpty())
               <div class="swiper-slide">
                  <div href="#" class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                     <div>
                        <h2 class="mb-2 text-xl md:text-3xl text-center tracking-tight text-gray-900 dark:text-white">
                           REKAM MEDIS KESEHATAN SISWA
                           <br />
                           SMKN 46 JAKARTA
                        </h2>
                        <div class="border border-slate-800 border-bottom-0 mb-4"></div>
                     </div>
               
                     <div>
                        <div class="ml-4 text-black">
                           <h3 class="text-black -mt-2 mb-3 text-capitalize text-xl md:text-2xl">Type 2</h3>
                           <div class="mb-8">
                              <h3 class="-mt-2 mb-3 text-capitalize text-xl md:text-2xl">Group A</h3>
                              @foreach ($jawabans->where('pertanyaan.type', '2')->where('pertanyaan.group', 'a') as $jawaban)
                              <div class="mb-3 flex justify-between">
                                 <h5 class="font-normal md:text-xl text-base">{{ $jawaban->pertanyaan->pertanyaan }}</h5>
                                 <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2">
                                    <p class="!text-blue-600 ml-1.5 md:text-base text-sm">{{ $jawaban->jawaban }}</p>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endif
               
            </div>

            <div class="swiper-pagination"></div>
         </div>

         @else
         <div id="error">
            <div href="#" class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
               <div>
                  <h2 class="mb-2 text-xl md:text-3xl text-center tracking-tight text-gray-900 dark:text-white">
                     REKAM MEDIS KESEHATAN SISWA
                     <br>
                     SMKN 46 JAKARTA
                  </h2>
                  <div class="border border-slate-800 border-bottom-0 mb-4"></div>
                  <h6 class="text-secondary text-center text-sm md:text-base">Jawaban Belom Diisi oleh Siswa!</h6>
               </div>
               <div>
               </div>
            </div>
         </div>
         @endif
      
      @else
         <div id="error">
            <div class="container text-center">
               <div class="pt-2">
                  <h1 class="errors-titles text-primary">404</h1>
                  <p>Data Belom diisi oleh siswa!</p>
               </div>
            </div>
         </div>
      @endif
   </main>
</div>

<script>
   window.onload = function(){
      const swiper = new Swiper(".swiper", {
         spaceBetween: 50,
         pagination: {
            el: '.swiper-pagination',
            clickable: true
         },
      });
   }

</script>

@endsection
