@extends('layouts.dashboard')

@section('search')
        @if (Auth::user()->level == 2)
        <form action="{{ url('siswawali') }}" method="GET" class="">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2" name="cari" value="{{ request('cari') }}">
                <div class="input-group-append">
                    <button class="btn" style="background-color: #256D85;" type="submit">
                        <i class="fas fa-search fa-sm text-white"></i>
                    </button>
                </div>
            </div>
        </form>
        @elseif (Auth::user()->level == 5 )
        <form action="{{ url('siswa') }}" method="GET" class="">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2" name="cari" value="{{ request('cari') }}">
                <div class="input-group-append">
                    <button class="btn" style="background-color: #256D85;" type="submit">
                        <i class="fas fa-search fa-sm text-white"></i>
                    </button>
                </div>
            </div>
        </form>
        @endif
@endsection

@section('isi')

<div class="main-content">
   <main>
      @if ($siswa->isEmpty())
      <div class="card">
         <div class="card-title pt-4">
            <h2 class="text-center text-dark fw-bold">BIODATA SISWA</h2>
         </div>
         <div class="card-body">
            <div class="container">
               <form class="row" action="{{ route('siswaid.store') }}" method="post" >
                  @csrf
      
                  <div class="col-md-6 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">NISN</label>
                     <input type="number" class="form-control" value="{{ old('nisn') }}" id="StoreID" name="nisn" required placeholder="0045874511" minlength="10" autofocus
                     oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                     type="number"
                     maxlength="10"
                     >
                  </div>
                  <div class="col-md-6 mb-3">
                     <div class="form-group">
                           <label for="formGroupExampleInput" class="mb-2">NIS</label>
                           <input type="number" class="form-control"  value="{{ old('nis') }}" id="LocID" name="nis" required placeholder="11504"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                           type="number"
                           maxlength="5">
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Nama Lengkap</label>
                     <input type="text" class="form-control" id="ProdID"  value="{{ old('nama_lengkap') }}" name="nama_lengkap" required placeholder="Siti Halimah Putri">
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Nama Panggilan</label>
                     <input type="text" class="form-control" id="ProdID"  value="{{ old('nama_panggilan') }}" name="nama_panggilan" required placeholder="Siti">
                  </div>
                  <div class="col-md-2 mb-3">
                     <input type="hidden" class="form-control" id="LocID"  name="userID" required value="{{ Auth::user()->id }}">
                     <label for="formFile" class="mb-2">Kelas</label>
                     <select class="form-select" aria-label="Default select example" name="kelasID" required>
                           @foreach ($kelas as $data)
                              <option value="{{ $data->id }}">{{ $data->kelas }} {{ $data->jurusan }}</option>
                           @endforeach
                     </select>
                  </div>
               
                  <div class="col-md-6 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Tempat lahir</label>
                     <input type="text" class="form-control" value="{{ old('tmp_lahir') }}" id="ProdID" name="tmp_lahir" required placeholder="Surabaya">
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Tanggal Lahir</label>
                     <input type="date" class="form-control" id="ProdID"  value="{{ old('tgl_lahir') }}" name="tgl_lahir" required>
                  </div>
                  <div class="col-md-2 mb-3">
                     <label for="formFile" class="mb-2">Jenis kelamin</label>
                     <select class="form-select" aria-label="Default select example"  value="{{ old('jns_kelamin') }}" name="jns_kelamin" required>
                           <option value="L">Laki - Laki</option>
                           <option value="P">Perempuan</option>
                     </select>
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Gol Darah</label>
                     <input type="text" class="form-control" id="ProdID"  value="{{ old('gol_darah') }}" name="gol_darah" required placeholder="B">
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Anak Ke</label>
                     <input type="text" class="form-control" id="ProdID"  value="{{ old('anak_ke') }}" name="anak_ke" required placeholder="2">
                 </div>
                 <div class="col-md-4 mb-3">
                     <label for="formFile" class="mb-2">Tinggal Bersama</label>
                     <select class="form-select" aria-label="Default select example"  value="{{ old('tggl_bersama') }}" name="tggl_bersama" required>
                         <option value="Orang Tua">Orang Tua</option>
                         <option value="Wali">Wali</option>
                     </select>
                 </div>
                 <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Alamat</label>
                     <input type="text" class="form-control" id="ProdID" name="alamat"  value="{{ old('alamat') }}" required placeholder="Jl. Kemuning Raya No 29 Rt/Rw 01/08">
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput">No telepon</label>
                     <input type="number" class="form-control" id="ProdID" name="no_telp"  value="{{ old('no_telp') }}" required placeholder="0895617036426" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                     type="number"
                     maxlength="13">
                 </div>
                 <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Email</label>
                     <input type="email" class="form-control" id="ProdID" name="email"  value="{{ old('email') }}" required placeholder="siti@gmail.com">
                  </div>
                  <div class="col-12 mb-3">
                     <label for="formFile" class="mb-2">Disabilitas</label>
                     <select class="form-select" aria-label="Default select example"  value="{{ old('disabilitas') }}" name="disabilitas" required>        
                             <option value="Tidak">Tidak</option>
                             <option value="ADHD">ADHD</option>
                             <option value="Autisme">Autisme</option>
                             <option value="Daksa">Daksa</option>
                             <option value="Ganda">Ganda</option>
                             <option value="Grahita">Grahita</option>
                             <option value="Netra">Netra</option>
                             <option value="Rungu">Rungu</option>
                             <option value="Rungu Wicara" >Rungu Wicara</option>    
                     </select>
                  </div>

                  <button style="background-color: #39b1e0; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
                  <button type="reset" class="btn btn-danger mt-4">Reset</button>
               </form>
            </div>
         </div>
      </div>
@elseif ($siswa->isNotEmpty() and $ortu->isEmpty())
<div class="card">
   <div class="card-title pt-4">
      <h2 class="text-center text-dark fw-bold">BIODATA ORANG TUA</h2>
   </div>
   <div class="card-body">
      <div class="container">
         <form class="row" action="{{ route('dataorangtua.store') }}" method="post" >
            @csrf

            {{-- <div class="col-md-6 mb-3">
               <label for="formGroupExampleInput" class="mb-2">NISN</label>
               <input type="number" class="form-control" value="{{ old('nisn') }}" id="StoreID" name="nisn" required placeholder="0045874511" minlength="10" autofocus
               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
               type="number"
               maxlength="10"
               >
            </div> --}}
 
            <div class="col-md-6 mb-3">
               <label for="formGroupExampleInput" class="mb-2">Nama Ayah</label>
               <input type="text" class="form-control" id="ProdID"  value="{{ old('nama_ayah') }}" name="nama_ayah" required placeholder="Udin Bahrudin">
               <input type="hidden" name="userID" value="{{ Auth::user()->id }}">
            </div>
            <div class="col-md-6 mb-3">
               <label for="formGroupExampleInput" class="mb-2">Tempat lahir Ayah</label>
               <input type="text" class="form-control" id="ProdID"  value="{{ old('tmplahir_ayah') }}" name="tmplahir_ayah" required placeholder="Jakarta">
            </div>
          
            <div class="col-md-6 mb-3">
               <label for="formGroupExampleInput" class="mb-2">Pekerjaan Ayah</label>
               <input type="text" class="form-control" value="{{ old('pekerjaan_ayah') }}" id="pekerjaan_ayah" name="pekerjaan_ayah" required placeholder="Wiraswasta">
            </div>
            <div class="col-md-6 mb-3">
               <label for="formGroupExampleInput" class="mb-2">Alamat Ayah</label>
               <input type="text" class="form-control" id="ProdID"  value="{{ old('alamat_ayah') }}" name="alamat_ayah" required placeholder="Jl. Kemuning Raya No 29 Rt/Rw 01/08">
            </div>
           
            <div class="col-md-6 mb-3">
               <label for="formGroupExampleInput" class="mb-2">Nama Ibu</label>
               <input type="text" class="form-control" id="ProdID"  value="{{ old('nama_ibu') }}" name="nama_ibu" required placeholder="Siti">
            </div>
            <div class="col-md-6 mb-3">
               <label for="formGroupExampleInput" class="mb-2">Tempat Lahir Ibu</label>
               <input type="text" class="form-control" id="ProdID"  value="{{ old('tmplahir_ibu') }}" name="tmplahir_ibu" required placeholder="Bekasi">
           </div>
         
           <div class="col-md-6 mb-3">
               <label for="formGroupExampleInput" class="mb-2">Pekerjaan Ibu</label>
               <input type="text" class="form-control" id="ProdID" name="pekerjaan_ibu"  value="{{ old('pekerjaan_ibu') }}" required placeholder="Ibu rumah tangga">
            </div>
   
           <div class="col-md-6 mb-3">
               <label for="formGroupExampleInput" class="mb-2">Alamat ibu</label>
               <input type="text" class="form-control" id="ProdID" name="alamat_ibu"  value="{{ old('alamat_ibu') }}" required placeholder="Jl. Kemuning Raya No 29 Rt/Rw 01/08">
            </div>
           

            <button style="background-color: #39b1e0; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
            <button type="reset" class="btn btn-danger border-0 mt-4">Reset</button>
         </form>
      </div>
   </div>
</div>
      @else
      <div class="container">

         @if (Auth::user()->level == 1 and $ortu->isNotEmpty())

         <main>
            <div>
               <h2 class="m-3 font-semibold text-center text-gray-700 dark:text-gray-200">Detail Informasi Anda</h2>

               <div class="mb-8">
                  <div class="flex gap-x-6">
                     @foreach($siswa as $ite)
                        <div class="text-gray-800 text-sm font-normal w-full px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-gray-100">
                            <h4 class="text-gray-700">Profil Anda:</h4>
                            <div class="">
                               <div class="grid grid-cols-2">
                                 <h5>Nama </h5>
                                 <h5>: {{ $ite->nama_lengkap }}</h5>
                               </div>
                               <div class="grid grid-cols-2">
                                 <h5>NISN </h5>
                                 <h5>: {{ $ite->nisn }}</h5>
                               </div>
                               <div class="grid grid-cols-2">
                                 <h5>Tanggal Lahir </h5>
                                 <h5>: {{ $ite->tgl_lahir}}</h5>
                               </div>
                               <div class="grid grid-cols-2">
                                 <h5>Jenis Kelamin </h5>
                                 <h5>: {{ $ite->jns_kelamin == "L" ? "Laki-Laki" : "Perempuan" }}</h5>
                               </div>
                            </div>
                        </div>

                        @foreach($ortu as $ite)
                        <div class="text-gray-800 text-sm font-normal w-full px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-gray-100">
                            <h4 class="text-gray-700">Profil Orangtua Anda:</h4>
                            <div class="">
                              <div class="grid grid-cols-2">
                                <h5>Nama Ayah</h5>
                                <h5 class="capitalize">: {{ $ite->nama_ayah }}</h5>
                              </div>
                              <div class="grid grid-cols-2">
                                <h5>Nama Ibu</h5>
                                <h5 class="capitalize">: {{ $ite->nama_ibu }}</h5>
                              </div>
                              <div class="grid grid-cols-2">
                                <h5>Pekerjaan Ayah </h5>
                                <h5 class="capitalize">: {{ $ite->pekerjaan_ayah}}</h5>
                              </div>
                              <div class="grid grid-cols-2">
                                <h5>Pekerjaan Ibu </h5>
                                <h5 class="capitalize">: {{ $ite->pekerjaan_ibu  }}</h5>
                              </div>
                           </div>
                        </div>
                        @endforeach
                      @endforeach
                     </div>
                  </div>

                  @php
                      $jumlahGroupA = $pertanyaans->where('type', '1')->where('group', 'a')->count();
                      $jumlahGroupB = $pertanyaans->where('type', '1')->where('group', 'b')->count();
                      $jumlahGroupC = $pertanyaans->where('type', '1')->where('group', 'c')->count();
                  @endphp

                  <div class="text-gray-800 text-sm font-normal w-full px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-gray-100">
                     <h1 class="text-xl mb-4">Pertanyaan</h1>
                     <div class="flex gap-x-1">
                        {{-- Jawaban Group A --}}
                        @if ($jawabans->slice(0, $jumlahGroupA)->count() == $jumlahGroupA)
                        <div class="w-full">
                           <div class="bg-blue-600 h-1"></div>
                           <p class="text-black mt-3 relative" data-popover-target="popover-group1" data-popover-placement="bottom">Group 1
                              <div data-popover id="popover-group1" role="tooltip" class="inline-block absolute invisible z-10 w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                 <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-white">Pertanyaan Group 1</h3>
                                 </div>
                                 <div class="p-3 flex gap-x-2">
                                    <form action="/isijawaban" method="post">
                                       @csrf
                                       <button type="submit" class="flex items-center gap-x-1 text-sm font-semibold text-slate-700 hover:text-blue-600">
                                          <input type="hidden" name="group" value="a">
                                          <i data-feather="align-right" class="w-5"></i>
                                          Detail
                                       </button>
                                    </form>
                                    <form action="/editjawaban" method="post">
                                       @csrf
                                       <button type="submit" class="flex items-center gap-x-1 text-sm font-semibold text-slate-700 hover:text-cyan-500">
                                          <input type="hidden" name="group" value="a">
                                          <i data-feather="edit" class="w-5"></i>
                                          Edit
                                       </button>
                                    </form>
                                 </div>
                              </div>
                           </p>
                        </div>
                        @else
                        <div class="w-full">
                           <div class="bg-gray-300 h-1"></div>
                           <p class="text-black mt-3 relative" data-popover-target="popover-group1" data-popover-placement="bottom">Group 1
                              <div data-popover id="popover-group1" role="tooltip" class="inline-block absolute invisible z-10 w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                 <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-white">Pertanyaan Group 1</h3>
                                 </div>
                                 <div class="p-3 flex gap-x-2">
                                    <a href="/kuisioner" class="flex items-center gap-x-1 text-xs text-slate-700 hover:text-blue-600">
                                       <i data-feather="edit-3" class="w-5"></i>
                                       Jawab Pertanyaan
                                    </a>
                                 </div>
                              </div>
                           </p>
                        </div>
                        @endif
                        
                        {{-- Jawaban Group B --}}
                        @if ($jawabans->slice($jumlahGroupA, $jumlahGroupB)->count()  == $jumlahGroupB)
                        <div class="w-full">
                           <div class="bg-blue-600 h-1"></div>
                           <p class="text-black mt-3 relative" data-popover-target="popover-group2" data-popover-placement="bottom">Group 2
                              <div data-popover id="popover-group2" role="tooltip" class="inline-block absolute invisible z-10 w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                 <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-white">Pertanyaan Group 2</h3>
                                 </div>
                                 <div class="p-3 flex gap-x-2">
                                    <form action="/isijawaban" method="post">
                                       @csrf
                                       <button type="submit" class="flex items-center gap-x-1 text-sm font-semibold text-slate-700 hover:text-blue-600">
                                          <input type="hidden" name="group" value="b">
                                          <i data-feather="align-right" class="w-5"></i>
                                          Detail
                                       </button>
                                    </form>
                                    <form action="/editjawaban" method="post">
                                       @csrf
                                       <button type="submit" class="flex items-center gap-x-1 text-sm font-semibold text-slate-700 hover:text-cyan-500">
                                          <input type="hidden" name="group" value="b">
                                          <i data-feather="edit" class="w-5"></i>
                                          Edit
                                       </button>
                                    </form>
                                 </div>
                              </div>
                           </p>
                        </div>
                        @else
                        <div class="w-full">
                           <div class="bg-gray-300 h-1"></div>
                           <p class="text-black mt-3 relative" data-popover-target="popover-group2" data-popover-placement="bottom">Group 2
                              <div data-popover id="popover-group2" role="tooltip" class="inline-block absolute invisible z-10 w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                 <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-white">Pertanyaan Group 2</h3>
                                 </div>
                                 <div class="py-2 px-3 flex gap-x-2">
                                    <a href="/kuisioner" class="flex items-center gap-x-1 text-xs text-slate-700 hover:text-blue-600">
                                       <i data-feather="edit-3" class="w-5"></i>
                                       Jawab Pertanyaan
                                    </a>
                                 </div>
                              </div>
                           </p>
                        </div>
                        @endif

                        {{-- Jawaban Group C --}}
                        @if ($jawabans->slice($jumlahGroupA + $jumlahGroupB, $jumlahGroupC)->count()  == $jumlahGroupC)
                        <div class="w-full">
                           <div class="bg-blue-600 h-1"></div>
                           <p class="text-black mt-3 relative" data-popover-target="popover-group3" data-popover-placement="bottom">Group 3
                              <div data-popover id="popover-group3" role="tooltip" class="inline-block absolute invisible z-10 w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                 <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-white">Pertanyaan Group 3</h3>
                                 </div>
                                 <div class="p-3 flex gap-x-2">
                                    <form action="/isijawaban" method="post">
                                       @csrf
                                       <button type="submit" class="flex items-center gap-x-1 text-sm font-semibold text-slate-700 hover:text-blue-600">
                                          <input type="hidden" name="group" value="c">
                                          <i data-feather="align-right" class="w-5"></i>
                                          Detail
                                       </button>
                                    </form>
                                    <a href="#" class="flex m-0 p-0 items-center gap-x-1 text-xs text-slate-700 hover:text-cyan-500">
                                       <i data-feather="edit" class="w-5"></i>
                                       Edit
                                    </a>
                                 </div>
                              </div>
                           </p>
                        </div>
                        @else
                        <div class="w-full">
                           <div class="bg-gray-300 h-1"></div>
                           <p class="text-black mt-3 relative" data-popover-target="popover-group3" data-popover-placement="bottom">Group 3
                              <div data-popover id="popover-group3" role="tooltip" class="inline-block absolute invisible z-10 w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                 <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-white">Pertanyaan Group 3</h3>
                                 </div>
                                 <div class="py-2 px-3 flex gap-x-2">
                                    <a href="/kuisioner" class="flex items-center gap-x-1 text-xs text-slate-700 hover:text-blue-600">
                                       <i data-feather="edit-3" class="w-5"></i>
                                       Jawab Pertanyaan
                                    </a>
                                 </div>
                              </div>
                           </p>
                        </div>
                        @endif

                     </div>
                  </div>
            </div>
         </main>

        @endif
      </div>
      @endif
   </main>
</div>

@endsection
