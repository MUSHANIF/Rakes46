@extends('layouts.admin')
@section('search')
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

@endsection

@section('isi')

  

@if ($data->isEmpty())
<div class="container" style="position: relative;">
    <h2 class="text-center">Mohon isi data dahulu!</h2>
    <form action="{{ route('siswaid.store') }}" method="post" >
        @csrf
         <div class="form-group">
            <label for="formGroupExampleInput">Nisn</label>
            <input type="number" class="form-control" id="StoreID" name="nisn" required>
        </div>
        
            
            <input type="hidden" class="form-control" id="LocID" name="userID" required value="{{ Auth::user()->id }}">
            <label for="formFile" class="form-label">Kelas</label>
            <select class="form-select" aria-label="Default select example" name="kelasID" required>
                @foreach ($kelas as $data)
                    <option value="{{ $data->id }}">{{ $data->jurusan }}</option>
                @endforeach
               
              
            </select>
      
        <div class="form-group">
            <label for="formGroupExampleInput">Nis</label>
            <input type="number" class="form-control" id="LocID" name="nis" required>
           
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nama Lengkap</label>
            <input type="text" class="form-control" id="ProdID" name="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nama Panggilan</label>
            <input type="text" class="form-control" id="ProdID" name="nama_panggilan" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Tempat lahir</label>
            <input type="text" class="form-control" id="ProdID" name="tmp_lahir" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Tanggal Lahir</label>
            <input type="date" class="form-control" id="ProdID" name="tgl_lahir" required>
        </div>
        <label for="formFile" class="form-label">Jenis kelamin</label>
            <select class="form-select" aria-label="Default select example" name="jns_kelamin" required>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
            <div class="form-group">
                <label for="formGroupExampleInput">Gol Darah</label>
                <input type="text" class="form-control" id="ProdID" name="gol_darah" required>
            </div>
    
            <div class="form-group">
                <label for="formGroupExampleInput">Anak Ke</label>
                <input type="text" class="form-control" id="ProdID" name="anak_ke" required>
            </div>
            <label for="formFile" class="form-label">Tinggal Bersama</label>
            <select class="form-select" aria-label="Default select example" name="tggl_bersama" required>
                @foreach ($datas as $data)
                <option value="{{ $data->tggl_bersama }}">{{ $data->tggl_bersama }}</option>
                @endforeach
              
             
            </select>
            <div class="form-group">
                <label for="formGroupExampleInput">Alamat</label>
                <input type="text" class="form-control" id="ProdID" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">No telepon</label>
                <input type="number" class="form-control" id="ProdID" name="no_telp" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Email</label>
                <input type="email" class="form-control" id="ProdID" name="email" required>
                
            </div>
        <label for="formFile" class="form-label">Disabilitas</label>
        <select class="form-select" aria-label="Default select example" name="disabilitas" required>
        
            <option value="Tidak">Tidak</option>
             <option value="ADHD">ADHD</option>
              <option value="Autismes">Autismes</option>
               <option value="Daksa">Daksa</option>
               <option value="Ganda">Ganda</option>
                 <option value="Grahita">Grahita</option>
                 <option value="Netra">Netra</option>
                 <option value="Rungu">Rungu</option>
                 <option value="Rungu Wicara" >Rungu Wicara</option>
            
            
           
          
        </select>
         <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
         <button type="reset" class="btn btn-danger mt-4">Reset</button>
    </form>
  </div>
@else
   

    <div class="container">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            List Siswa
          </h2>
          
          @if (Auth::user()->level == 1)
        
           <h1>ada datanya!</h1>
    
        
          @endif
       
    </div>
    @endif
  
@endsection