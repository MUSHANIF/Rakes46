@extends('layouts.dashboard')
@section('search')
<div class="main-content">
    <main>
        @if (Auth::user()->level == 2)
        <form action="{{ url('siswawali') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
        <form action="{{ url('siswa') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
    </main>
</div>

@endsection

@section('isi')

<div class="main-content">
    <main>
        
        @if ($data->isEmpty())
        <div class="card">
            <div class="card-title pt-4">
                <h2 class="text-center text-dark fw-bold">DATA ORANG TUA SISWA</h2>
            </div>
            <div class="card-body">
                <div class="container" style="position: relative;">
                    <form action="{{ route('dataorangtua.store') }}" method="post" >
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id">
                            <input type="hidden" class="form-control" id="LocID" name="userID" required value="{{ Auth::user()->id }}">
                            <label for="formGroupExampleInput">Nama Ayah</label>
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Tempat Lahir Ayah</label>
                            <input type="text" class="form-control" id="StoreID" name="tmplahir_ayah" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" id="StoreID" name="pekerjaan_ayah" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Alamat Ayah</label>
                            <input type="text" class="form-control" id="StoreID" name="alamat_ayah" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama Ibu</label>
                            <input type="text" class="form-control" id="StoreID" name="nama_ibu" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Tempat Lahir Ibu</label>
                            <input type="text" class="form-control" id="StoreID" name="tmplahir_ibu" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" id="StoreID" name="pekerjaan_ibu" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Alamat Ibu</label>
                            <input type="text" class="form-control" id="StoreID" name="alamat_ibu" required>
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
                    Data Orang Tua Siswa
                </h2>
                
                @if (Auth::user()->level == 1)
                
                <main class="">
                    <div class="container-grid px-6 ">
                    <h4 class="m-3 font-semibold text-center text-gray-700 dark:text-gray-200">
                        Data Orang Tua
                    </h4>
                
                
                    <div class="w-full mb-8 ">
                        <div class="w-full overflow-x-auto">
                        @foreach($data as $ite)
                        <div
                            class="text-gray-800 text-sm font-semibold px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-gray-100 ">
                
                        
                            <h5>Nama Ayah: {{ $ite->nama_ayah }}</h5>
                            <h5>Nama Ibu : {{ $ite->nama_ibu }}</h5>
                            {{-- <h2 class="mt-4">NIK : {{ $ite->nik }}</h2> --}}
                            <h5 >Pekerjaan Ayah : {{ $ite->pekerjaan_ayah}}</h5>
                            <h5 >Pekerjaan Ibu : {{ $ite->pekerjaan_ibu }}</h5>
                            
                        
                        </div>
                
                        
                    
                
                </main>
                
                @endforeach
            
                
                @endif
            
            </div>
        @endif
    </main>
</div>
  


  
@endsection