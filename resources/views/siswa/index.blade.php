@extends('layouts.dashboard') @section('search')
<div class="main-content">
   <main>
      @if (Auth::user()->level == 2 && !empty($datas))
      <form action="{{ url('siswawali') }}" method="GET" class="">
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
      @elseif (Auth::user()->level == 5 )
      <form action="{{ url('siswa') }}" method="GET" class="">
         @csrf
         <div class="input-group">
            <input type="text" class="form-control bg-light" placeholder="Search for..." name="cari" value="{{ request('cari') }}" />
            <div class="input-group-append">
               <button class="btn" style="background-color: #256d85" type="submit">
                  <i class="fas fa-search fa-sm text-white"></i>
               </button>
            </div>
         </div>
      </form>
      @elseif (Auth::user()->level == 3 )
      <form action="{{ url('siswapuskesmas') }}" method="GET" class="">
         @csrf
         <div class="input-group">
            <input type="text" class="form-control bg-light" placeholder="Search for..." name="cari" value="{{ request('cari') }}" />
            <div class="input-group-append">
               <button class="btn" style="background-color: #256d85" type="submit">
                  <i class="fas fa-search fa-sm text-white"></i>
               </button>
            </div>
         </div>
      </form>
      @elseif ( Auth::user()->level == 4 )
      <form action="{{ url('siswakepala') }}" method="GET" class="">
         @csrf
         <div class="input-group">
            <input type="text" class="form-control bg-light" placeholder="Search for..." name="cari" value="{{ request('cari') }}" />
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
      @can('wali_kelas')
         @if (empty($kelas->nip) && empty($kelas->nama_guru))
         <div class="container" style="position: relative">
            <h2 class="text-center text-dark">Mohon isi data dahulu!</h2>
            <form action="{{ route('siswawali.store') }}" method="post">
               @csrf
               <div class="form-group">
                  <label for="formGroupExampleInput">NIP</label>
                  <input type="number" class="form-control" id="StoreID" name="nip" placeholder="1345478434" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="10" />
               </div>
               <input type="hidden" class="form-control" id="LocID" name="userid" required value="{{ Auth::user()->id }}" />
               <div class="form-group">
                  <label for="formGroupExampleInput">Nama</label>
                  <input type="text" class="form-control" id="LocID" placeholder="Udin Bahrudin" name="nama_guru" required />
               </div>
               <div class="form-group">
                  <label for="formGroupExampleInput">Tahun Ajaran</label>
                  <input type="number" class="form-control" id="ProdID" name="thn_ajaran" placeholder="2022" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="4" />
               </div>
               <label for="formFile" class="form-label">Wali kelas</label>
               <select class="form-select" aria-label="Default select example" name="kelas" required>
                  <option value="{{ $kelas->kelas }}">{{ $kelas->kelas }}</option>
               </select>
               <label for="formFile" class="form-label">Jurusan</label>
               <select class="form-select" aria-label="Default select example" name="jurusan" required>
                  <option value="{{ $kelas->jurusan }}">{{ $kelas->jurusan }}</option>
               </select>
               <button style="background-color: #1960a7; border: unset" type="submit" class="btn btn-primary mt-4">Submit</button>
               <button type="reset" class="btn btn-danger border-0 mt-4" style="background-color: #dc3545">Reset</button>
            </form>
         </div>
         @endif
      @endcan

      <div class="container">
         @if (Auth::user()->level == 2 && !empty($kelas->nip))
         <h3 class="text-slate-800">List Siswa Anda</h3>
         <table class="table mt-3" cellpadding="10" cellspace="0">
            <thead class="align-self-center text-center" style="border: 1px solid rgba(0, 0, 0, 0.4)">
               <th class="text-light">Nama</th>
               <th class="text-light">Email</th>
               <th class="text-light">Nama Guru</th>
               <th class="text-light">Jenis kelamin</th>
               <th class="text-light">Action</th>
            </thead>
            @if (!empty($datas))
               @foreach ($datas->siswa as $key)
               <tbody>
                  <tr class="align-self-center" style="border: 1px solid rgba(0, 0, 0, 0.4)">
                     <td data-label="Name">{{ $key->nama_lengkap }}</td>
                     <td data-label="Email">{{ $key->email }}</td>
                     <td data-label="Nama Guru">{{ $datas->nama_guru }}</td>
                     <td data-label="Jenis kelamin">{{ $key->jns_kelamin == "L" ? "Laki-Laki" : "Perempuan" }}</td>
                     <td class="text-center justify-content-center align-self-center d-flex">
                        <a class="btn btn-detail border-0 ml-2" href="{{ route('siswawali.show', $key->userID)}}">Detail</a>
                     </td>
                  </tr>
               </tbody>
               @endforeach
            @endif
         </table>

         @elseif (Auth::user()->level == 3 || Auth::user()->level == 4)
         <table class="table mt-3" cellpadding="10" cellspace="0">
            <thead class="align-self-center text-center" style="border: 1px solid rgba(0, 0, 0, 0.4)">
               <th class="text-light">Nama</th>
               <th class="text-light">Email</th>
               <th class="text-light">Action</th>
            </thead>
            @foreach ($datas as $key)
            <tbody>
              <tr class="align-self-center" style="border: 1px solid rgba(0, 0, 0, 0.4)">
                  <td data-label="Name">{{ $key->name }}</td>
                  <td data-label="Email">{{ $key->email }}</td>
                  <td class="text-center justify-content-center align-self-center d-flex">
                     @if (Auth::user()->level == 3)
                     <a class="btn btn-detail border-0 ml-2" href="{{ route('siswapuskesmas.show',$key->id)}}">Detail</a>
                     @elseif (Auth::user()->level == 4)
                     <a class="btn btn-detail border-0 ml-2" href="{{ route('siswakepala.show',$key->id)}}">Detail</a>
                     @endif
                  </td>
               </tr>
            </tbody>
            @endforeach
         </table>
         
         @elseif (Auth::user()->level == 5)

         <table class="table mt-3" cellpadding="10" cellspace="0">
            <thead class="align-self-center text-center" style="border: 1px solid rgba(0, 0, 0, 0.4)">
               <th class="text-light">Nama</th>
               <th class="text-light">Email</th>
               <th class="text-light">Action</th>
            </thead>
            @foreach ($datas as $key)
            <tbody>
              <tr class="align-self-center" style="border: 1px solid rgba(0, 0, 0, 0.4)">
                  <td data-label="Name">{{ $key->name }}</td>
                  <td data-label="Email">{{ $key->email }}</td>

                  <td class="text-center justify-content-center align-self-center d-flex">
                     <a class="btn btn-info text-light border-0" href="{{ route('siswa.edit',$key->id)}}">Ubah</a>
                     <form action="{{ url('siswa/'.$key->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger border-0 ms-2">Delete</button>
                     </form>
                     <a class="btn btn-detail border-0 ml-2" href="{{ route('siswa.show',$key->id)}}">Detail</a>
                  </td>
               </tr>
            </tbody>
            @endforeach
         </table>

         @endif
      </div>
   </main>
</div>

@endsection
