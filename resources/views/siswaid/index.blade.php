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
        @else
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
        @if ($data->isEmpty())
        <div class="card">
            <div class="card-title pt-4">
                <h2 class="text-center">BIODATA SISWA</h2>
            </div>
            <div class="card-body">
                <div class="container">
                    <form class="row" action="{{ route('siswaid.store') }}" method="post" >
                        @csrf
           
                        <div class="col-md-6 mb-3">
                            <label for="formGroupExampleInput" class="mb-2">NISN</label>
                            <input type="number" class="form-control" id="StoreID" name="nisn" required placeholder="0045874511" minlength="10" autofocus
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type="number"
                            maxlength="10"
                            >
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="formGroupExampleInput" class="mb-2">NIS</label>
                                <input type="number" class="form-control" id="LocID" name="nis" required placeholder="11504"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                type="number"
                                maxlength="5">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="formGroupExampleInput" class="mb-2">Nama Lengkap</label>
                            <input type="text" class="form-control" id="ProdID" name="nama_lengkap" required placeholder="Siti Halimah Putri">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="formGroupExampleInput" class="mb-2">Nama Panggilan</label>
                            <input type="text" class="form-control" id="ProdID" name="nama_panggilan" required placeholder="Siti">
                        </div>
                        <div class="col-md-2 mb-3">
                            <input type="hidden" class="form-control" id="LocID" name="userID" required value="{{ Auth::user()->id }}">
                            <label for="formFile" class="mb-2">Kelas</label>
                            <select class="form-select" aria-label="Default select example" name="kelasID" required>
                                @foreach ($kelas as $data)
                                    <option value="{{ $data->id }}">{{ $data->kelas }} {{ $data->jurusan }}</option>
                                @endforeach
                            </select>
                        </div>
                      
                        <div class="col-md-6 mb-3">
                            <label for="formGroupExampleInput" class="mb-2">Tempat lahir</label>
                            <input type="text" class="form-control" id="ProdID" name="tmp_lahir" required placeholder="Surabaya">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="formGroupExampleInput" class="mb-2">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="ProdID" name="tgl_lahir" required>
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
                            <input type="text" class="form-control" id="ProdID" name="gol_darah" required placeholder="B">

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="formGroupExampleInput" class="mb-2">Anak Ke</label>
                            <input type="text" class="form-control" id="ProdID" name="anak_ke" required placeholder="2">

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
                            <input type="text" class="form-control" id="ProdID" name="alamat" required placeholder="Jl. Kemuning Raya No 29 Rt/Rw 01/08">

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="formGroupExampleInput">No telepon</label>
                            <input type="number" class="form-control" id="ProdID" name="no_telp" required placeholder="0895617036426">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="formGroupExampleInput" class="mb-2">Email</label>
                            <input type="email" class="form-control" id="ProdID" name="email" required placeholder="siti@gmail.com">

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
                                    <option value="Rungu Wicara" >Rungu Wicara</option>    
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
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    {{-- List Siswa --}}
                </h2>
                
                @if (Auth::user()->level == 1)
                
                <main class="">
                    <div class="container-grid px-6 ">
                            <h4 class="m-3 font-semibold text-center text-gray-700 dark:text-gray-200">
                                Detail Informasi Anda
                            </h4>
                        
                        
                            <div class="w-full mb-8 ">
                                <div class="w-full overflow-x-auto">
                                @foreach($data as $ite)
                               
                                <div
                                    class="text-gray-800 text-sm font-normal px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-gray-100 ">
                        
                                    <h5 class="h5">Profil Anda:</h5>
                                    <h5>Nama : {{ $ite->nama_lengkap }}</h5>
                                    <h5>NISN : {{ $ite->nisn }}</h5>
                                    
                                    <h5 >Tanggal lahir : {{ $ite->tgl_lahir}}</h5>
                                    <h5 >Jenis Kelamin : {{ $ite->jns_kelamin }}</h5>
                                </div>
                                
                                   
                                
                                
                               
                                        
                                        @foreach($data1 as $ite)
                                        <div
                                            class="text-gray-800 text-sm font-normal px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-gray-100 ">
                                
                                            <h5 class="h5">Profil orangtua anda:</h5>
                                            <h5>Nama Ayah: {{ $ite->nama_ayah }}</h5>
                                            <h5>Nama Ibu : {{ $ite->nama_ibu }}</h5>
                                            {{-- <h2 class="mt-4">NIK : {{ $ite->nik }}</h2> --}}
                                            <h5 >Pekerjaan Ayah : {{ $ite->pekerjaan_ayah}}</h5>
                                            <h5 >Pekerjaan Ibu : {{ $ite->pekerjaan_ibu }}</h5>
                                            
                                        
                                        </div>
                                        @endforeach
                        </div>
                
                        
                    
                
                </main>
                
                @endforeach
            
                
                @endif
            
            </div>
        @endif
    </main>
</div>

@endsection