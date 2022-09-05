@extends('layouts.dashboard')

@section('search') 
<div class="main-content">
   <main>
      @if (Auth::user()->level == 2)
      <form action="{{ url('siswawali') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
         @csrf
         <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="cari" value="{{ request('cari') }}" />
            <div class="input-group-append">
               <button class="btn" style="background-color: #256d85" type="submit">
                  <i class="fas fa-search fa-sm text-white"></i>
               </button>
            </div>
         </div>
      </form>
      @else
      <form action="{{ url('siswa') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
         @csrf
         <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="cari" value="{{ request('cari') }}" />
            <div class="input-group-append">
               <button class="btn" style="background-color: #256d85" type="submit">
                  <i class="fas fa-search fa-sm text-white"></i>
               </button>
            </div>
         </div>
      </form>
      @endif
   </main>
</div>

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
               <form class="row text-dark" action="{{ route('siswaid.store') }}" method="post">
                  @csrf
                  <div class="col-md-6 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">NISN</label>
                     <input type="number" class="form-control" id="StoreID" name="nisn" required placeholder="0045874511" />
                  </div>
                  <div class="col-md-6 mb-3">
                     <div class="form-group">
                        <label for="formGroupExampleInput" class="mb-2">NIS</label>
                        <input type="number" class="form-control" id="LocID" name="nis" required placeholder="11504" />
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Nama Lengkap</label>
                     <input type="text" class="form-control" id="ProdID" name="nama_lengkap" required placeholder="Siti Halimah Putri" />
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Nama Panggilan</label>
                     <input type="text" class="form-control" id="ProdID" name="nama_panggilan" required placeholder="Siti" />
                  </div>
                  <div class="col-md-2 mb-3">
                     <input type="hidden" class="form-control" id="LocID" name="userID" required value="{{ Auth::user()->id }}" />
                     <label for="formFile" class="mb-2">Kelas</label>
                     <select class="form-select" aria-label="Default select example" name="kelasID" required>
                        @foreach ($kelas as $data)
                        <option value="{{ $data->id }}">{{ $data->jurusan }}</option>
                        @endforeach
                     </select>
                  </div>

                  <div class="col-md-6 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Tempat lahir</label>
                     <input type="text" class="form-control" id="ProdID" name="tmp_lahir" required placeholder="Surabaya" />
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Tanggal Lahir</label>
                     <input type="date" class="form-control" id="ProdID" name="tgl_lahir" required />
                  </div>
                  <div class="col-md-2 mb-3">
                     <label for="formFile" class="mb-2">Jenis kelamin</label>
                     <select class="form-select" aria-label="Default select example" name="jns_kelamin" required>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                     </select>
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Gol Darah</label>
                     <input type="text" class="form-control" id="ProdID" name="gol_darah" required placeholder="B" />
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Anak Ke</label>
                     <input type="text" class="form-control" id="ProdID" name="anak_ke" required placeholder="2" />
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formFile" class="mb-2">Tinggal Bersama</label>
                     <select class="form-select" aria-label="Default select example" name="tggl_bersama" required>
                        <option value="Orang Tua">Orang Tua</option>
                        <option value="Wali">Wali</option>
                     </select>
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Alamat</label>
                     <input type="text" class="form-control" id="ProdID" name="alamat" required placeholder="Jl. Kemuning Raya No 29 Rt/Rw 01/08" />
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">No telepon</label>
                     <input type="number" class="form-control" id="ProdID" name="no_telp" required placeholder="0895617036426" />
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="formGroupExampleInput" class="mb-2">Email</label>
                     <input type="email" class="form-control" id="ProdID" name="email" required placeholder="siti@gmail.com" />
                  </div>
                  <div class="col-12 mb-3">
                     <label for="formFile" class="mb-2">Disabilitas</label>
                     <select class="form-select" aria-label="Default select example" name="disabilitas" required>
                        <option value="Tidak">Tidak</option>
                        <option value="ADHD">ADHD</option>
                        <option value="Autisme">Autisme</option>
                        <option value="Daksa">Daksa</option>
                        <option value="Ganda">Ganda</option>
                        <option value="Grahita">Grahita</option>
                        <option value="Netra">Netra</option>
                        <option value="Rungu">Rungu</option>
                        <option value="Rungu Wicara">Rungu Wicara</option>
                     </select>
                  </div>

                  <button style="background-color: #39b1e0; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
                  <button type="reset" class="btn btn-danger mt-4">Reset</button>
               </form>
            </div>
         </div>
      </div>

      @else
      <div class="container">

         @if (Auth::user()->level == 1)

         <main class="">
            <div class="container-grid px-6">
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
                                 <h5>: {{ $ite->jns_kelamin }}</h5>
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
            </div>
         </main>

        @endif
      </div>
      @endif
   </main>
</div>

@endsection
