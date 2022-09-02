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
        @if ($data->isEmpty() and Auth::user()->level == 2)
        <div class="container" style="position: relative;">
            <h2 class="text-center">Mohon isi data dahulu!</h2>
            <form action="{{ route('siswawali.store') }}" method="post" >
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Nip</label>
                    <input type="number" class="form-control" id="StoreID" name="nip" required>
                </div>    
                    <input type="hidden" class="form-control" id="LocID" name="userid" required value="{{ Auth::user()->id }}">

                <div class="form-group">
                    <label for="formGroupExampleInput">Nama</label>
                    <input type="text" class="form-control" id="LocID" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">tahun ajaran</label>
                    <input type="number" class="form-control" id="ProdID" name="thn_ajaran" required>
                </div>
                <label for="formFile" class="form-label">Jenis kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jns_kelamin" required>
                <option value="L">L</option>
                <option value="P">P</option>
                </select>
                <label for="formFile" class="form-label">Mengajar kelas</label>
                <select class="form-select" aria-label="Default select example" name="kelas" required>
                    <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <label for="formFile" class="form-label">Jurusan</label>
                <select class="form-select" aria-label="Default select example" name="jurusan" required>
                    <option value="AKL 1">AKL 1</option>
                    <option value="AKL 2">AKL 2</option>
                    <option value="BDP 1">BDP 1</option>
                    <option value="BDP 2">BDP 2</option>
                    <option value="OTKP 1">OTKP </option>
                    <option value="OTKP 2">OTKP 2</option>
                    <option value="DKV">DKV </option>
                    <option value="RPL">RPL</option>
                </select>
                <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
                <button type="reset" class="btn btn-danger mt-4">Reset</button>
            </form>
        </div>
        @else

        <div class="container">
            {{-- <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                List Siswa
            </h2> --}}
            @if (Auth::user()->level == 2)
            <table class="table mt-3" cellpadding="10" cellspace="0">
                <thead class="align-self-center text-center">
                    <th>Nama</th>
                    <th>Email</th>
                    <th>nama guru</th>                
                    <th>Jenis kelamin</th>  
                    <th>action</th>  
                </thead>
                @foreach ($datas as $key) 
                <tbody>
                    <tr class="align-self-center" style="border: 1px solid black;">
                        <td data-label="Name">{{ $key->nama_lengkap }}</td>
                        <td data-label="Cost">{{ $key->email }}</td>
                        <td data-label="Cost">{{ $key->nama_guru }}</td>
                        <td data-label="Cost">{{ $key->jns_kelamin }}</td>
                        <td class="text-center justify-content-center align-self-center d-flex">
                            <a class="btn btn-info ml-2" href="">Detail</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @elseif (Auth::user()->level == 4 or Auth::user()->level == 3)
            <table class="table mt-3" cellpadding="10" cellspace="0">
                <thead class="align-self-center text-center">
                    <th>Nama</th>
                    <th>Email</th>
                    <th>action</th>  
                </thead>
                @foreach ($datas as $key) 
                <tbody>
                    <tr class="align-self-center" style="border: 1px solid black;">
                        <td data-label="Name">{{ $key->name }}</td>
                        <td data-label="Cost">{{ $key->email }}</td>
                            
                        <td class="text-center justify-content-center align-self-center d-flex">
                            <a class="btn btn-info ml-2" href="">Detail</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @elseif (Auth::user()->level == 5)
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data siswa SMKN 46</h4>
                    </div>
                    <div class="card-body"> 
                    <div class="table-responsive"> 
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                            
                          </tr>
                        </thead>
                        @foreach ($datas as $key) 
                        <tbody>
                            <tr class="align-self-center" style="border: 1px solid black;">
                                <td data-label="Name">{{ $key->name }}</td>
                                <td data-label="Cost">{{ $key->email }}</td>
                                <td class="text-center justify-content-center align-self-center d-flex">
                                    <a class="btn btn-info" href="{{ route('siswa.edit',$key->id)}}">Ubah</a>
                                    <form action="{{ url('siswa/'.$key->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger ms-2">Delete</button>
                                    </form>
                                    <a class="btn btn-info ml-2" href="">Detail</a>
                                </td>
                            </tr>
                        
                        </tbody>
                        @endforeach
                      </table>
                      @endif
                      </div>
                      @endif
                    </div>
                </div>
            </div>

          
        </div>
    
    </main>
</div>  

  
@endsection
