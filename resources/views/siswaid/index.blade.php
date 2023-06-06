@extends('layouts.dashboard')

@section('search')
    @if (Auth::user()->level == 2)
        <form action="{{ url('siswawali') }}" method="GET" class="">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control form-control-sm bg-light small border-0" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2" name="cari" value="{{ request('cari') }}">
                <div class="input-group-append">
                    <button class="btn" style="background-color: #256D85;" type="submit">
                        <i class="fas fa-search fa-sm text-white"></i>
                    </button>
                </div>
            </div>
        </form>
    @elseif (Auth::user()->level == 5)
        <form action="{{ url('siswa') }}" method="GET" class="">
            @csrf
            <div class="input-group">

                <input type="text" class="form-control form-control-sm bg-light small border-0"
                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="cari"
                    value="{{ request('cari') }}">
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
            @if (empty($siswa))
                <div class="card">
                    <div class="card-title pt-4">

                        <h2 class="text-center text-dark fw-bold">BIODATA SISWA</h2>

                        <h2 class="text-dark fw-bold text-center">BIODATA SISWA</h2>

                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form class="row" action="{{ route('siswaid.store') }}" method="post">
                                @csrf
                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">NISN</label>
                                    <input type="number" class="form-control" value="{{ old('nisn') }}" id="StoreID"
                                        name="nisn" required placeholder="0045874511" minlength="10" autofocus
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        type="number" maxlength="10">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="mb-2">NIS</label>
                                        <input type="number" class="form-control" value="{{ old('nis') }}"
                                            id="LocID" name="nis" required placeholder="11504"
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                            type="number" maxlength="5">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Nama Lengkap</label>
                                    <input readonly type="text" class="form-control" id="ProdID"
                                        value="{{ old('nama_lengkap', auth()->user()->name) }}" name="nama_lengkap" required
                                        placeholder="Siti Halimah Putri">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Nama Panggilan</label>
                                    <input type="text" class="form-control" id="ProdID"
                                        value="{{ old('nama_panggilan') }}" name="nama_panggilan" required
                                        placeholder="Siti">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <input type="hidden" class="form-control" id="LocID" name="userID" required
                                        value="{{ Auth::user()->id }}">
                                    <label for="formFile" class="mb-2">Kelas</label>
                                    <select class="form-select" aria-label="Default select example" name="kelasID" required>
                                        @foreach ($kelas as $data)
                                            <option value="{{ $data->id }}">{{ $data->kelas }} -
                                                {{ $data->jurusan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Tempat lahir</label>
                                    <input type="text" class="form-control" value="{{ old('tmp_lahir') }}"
                                        id="ProdID" name="tmp_lahir" required placeholder="Surabaya">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="ProdID"
                                        value="{{ old('tgl_lahir') }}" name="tgl_lahir" required>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="formFile" class="mb-2">Jenis kelamin</label>
                                    <select class="form-select" aria-label="Default select example"
                                        value="{{ old('jns_kelamin') }}" name="jns_kelamin" required>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Gol Darah</label>
                                    <select name="gol_darah" class="form-select" id="prodID">
                                        <option {{ old('gol_darah') == 'A' ? 'selected' : '' }} value="A">A</option>
                                        <option {{ old('gol_darah') == 'AB' ? 'selected' : '' }} value="AB">AB
                                        </option>
                                        <option {{ old('gol_darah') == 'B' ? 'selected' : '' }} value="B">B</option>
                                        <option {{ old('gol_darah') == 'O' ? 'selected' : '' }} value="O">O</option>
                                        <option {{ old('gol_darah') == 'Belum Diketahui' ? 'selected' : '' }}
                                            value="Belum Diketahui">Belum Diketahui</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Anak Ke</label>
                                    <input type="number" class="form-control" id="ProdID"
                                        value="{{ old('anak_ke') }}" name="anak_ke" required placeholder="2">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="formFile" class="mb-2">Tinggal Bersama</label>
                                    <select class="form-select" aria-label="Default select example"
                                        value="{{ old('tggl_bersama') }}" name="tggl_bersama" required>
                                        <option {{ old('tggl_bersama') == 'Orang Tua' ? 'selected' : '' }}
                                            value="Orang Tua">Orang Tua</option>
                                        <option {{ old('tggl_bersama') == 'Wali' ? 'selected' : '' }} value="Wali">Wali
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Alamat</label>
                                    <input type="text" class="form-control" id="ProdID" name="alamat"
                                        value="{{ old('alamat') }}" required
                                        placeholder="Jl. Kemuning Raya No 29 Rt/Rw 01/08">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">No telepon</label>
                                    <input type="number" class="form-control" id="ProdID" name="no_telp"
                                        value="{{ old('no_telp') }}" required placeholder="0895617036426"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        type="number" maxlength="13">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Email</label>
                                    <input readonly type="email" class="form-control" id="ProdID" name="email"
                                        value="{{ old('email', auth()->user()->email) }}" required
                                        placeholder="siti@gmail.com">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="formFile" class="mb-2">Disabilitas</label>
                                    <select class="form-select" aria-label="Default select example"
                                        value="{{ old('disabilitas') }}" name="disabilitas" required>
                                        <option {{ old('disabilitas') == 'Tidak' ? 'selected' : '' }} value="Tidak">Tidak
                                        </option>
                                        <option {{ old('disabilitas') == 'ADHD' ? 'selected' : '' }} value="ADHD">ADHD
                                        </option>
                                        <option {{ old('disabilitas') == 'Autisme' ? 'selected' : '' }} value="Autisme">
                                            Autisme</option>
                                        <option {{ old('disabilitas') == 'Daksa' ? 'selected' : '' }} value="Daksa">Daksa
                                        </option>
                                        <option {{ old('disabilitas') == 'Ganda' ? 'selected' : '' }} value="Ganda">Ganda
                                        </option>
                                        <option {{ old('disabilitas') == 'Grahita' ? 'selected' : '' }} value="Grahita">
                                            Grahita</option>
                                        <option {{ old('disabilitas') == 'Netra' ? 'selected' : '' }} value="Netra">Netra
                                        </option>
                                        <option {{ old('disabilitas') == 'Rungu' ? 'selected' : '' }} value="Rungu">Rungu
                                        </option>
                                        <option {{ old('disabilitas') == 'Rungu Wicara' ? 'selected' : '' }}
                                            value="Rungu Wicara">Rungu Wicara</option>
                                    </select>
                                </div>

                                <button style="background-color: #39b1e0; border: unset" type="submit"
                                    class="btn btn-primary mt-4">Tambah</button>

                                <button type="reset" class="btn btn-danger mt-4 border-0">Reset</button>

                            </form>
                        </div>
                    </div>
                </div>
            @elseif (!empty($siswa) && empty($ortu))
                <div class="card">
                    <div class="card-title pt-4">

                        <h2 class="text-dark fw-bold text-center">BIODATA ORANG TUA</h2>

                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form class="row" action="{{ route('dataorangtua.store') }}" method="post">
                                @csrf
                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Nama Ayah</label>
                                    <input type="text" class="form-control" id="ProdID"
                                        value="{{ old('nama_ayah') }}" name="nama_ayah" required
                                        placeholder="Udin Bahrudin">
                                    <input type="hidden" name="userID" value="{{ Auth::user()->id }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Tempat lahir Ayah</label>
                                    <input type="text" class="form-control" id="ProdID"
                                        value="{{ old('tmplahir_ayah') }}" name="tmplahir_ayah" required
                                        placeholder="Jakarta">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Pekerjaan Ayah</label>
                                    <input type="text" class="form-control" value="{{ old('pekerjaan_ayah') }}"
                                        id="pekerjaan_ayah" name="pekerjaan_ayah" required placeholder="Wiraswasta">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Alamat Ayah</label>
                                    <input type="text" class="form-control" id="ProdID"
                                        value="{{ old('alamat_ayah') }}" name="alamat_ayah" required
                                        placeholder="Jl. Kemuning Raya No 29 Rt/Rw 01/08">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Nama Ibu</label>
                                    <input type="text" class="form-control" id="ProdID"
                                        value="{{ old('nama_ibu') }}" name="nama_ibu" required placeholder="Siti">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Tempat Lahir Ibu</label>
                                    <input type="text" class="form-control" id="ProdID"
                                        value="{{ old('tmplahir_ibu') }}" name="tmplahir_ibu" required
                                        placeholder="Bekasi">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Pekerjaan Ibu</label>
                                    <input type="text" class="form-control" id="ProdID" name="pekerjaan_ibu"
                                        value="{{ old('pekerjaan_ibu') }}" required placeholder="Ibu rumah tangga">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput" class="mb-2">Alamat ibu</label>
                                    <input type="text" class="form-control" id="ProdID" name="alamat_ibu"
                                        value="{{ old('alamat_ibu') }}" required
                                        placeholder="Jl. Kemuning Raya No 29 Rt/Rw 01/08">
                                </div>

                                <button style="background-color: #39b1e0; border: unset" type="submit"
                                    class="btn btn-primary mt-4">Tambah</button>

                                <button type="reset" class="btn btn-danger mt-4 border-0">Reset</button>

                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="container">

                    @if (!empty($ortu))
                        <main>
                            <div>

                                <h2 class="my-10 text-center text-2xl font-semibold text-gray-700 md:text-3xl">Detail
                                    Informasi Anda</h2>

                                <div class="mb-2">
                                    <div class="gap-x-6 md:flex">
                                        <div
                                            class="mb-8 w-full rounded-lg bg-white px-4 py-4 text-sm font-normal text-gray-800 shadow-md">
                                            <h4 class="text-xl text-gray-700 md:text-2xl">Profil Anda:</h4>

                                            <div>
                                                <div class="grid grid-cols-2">
                                                    <h5 class="text-base md:text-lg lg:text-xl">Nama </h5>
                                                    <h5 class="text-base md:text-lg lg:text-xl">:
                                                        {{ $siswa->nama_lengkap }}</h5>
                                                </div>
                                                <div class="grid grid-cols-2">
                                                    <h5 class="text-base md:text-lg lg:text-xl">NISN </h5>
                                                    <h5 class="text-base md:text-lg lg:text-xl">: {{ $siswa->nisn }}</h5>
                                                </div>
                                                <div class="grid grid-cols-2">
                                                    <h5 class="text-base md:text-lg lg:text-xl">Tanggal Lahir </h5>
                                                    <h5 class="text-base md:text-lg lg:text-xl">: {{ $siswa->tgl_lahir }}
                                                    </h5>
                                                </div>
                                                <div class="grid grid-cols-2">
                                                    <h5 class="text-base md:text-lg lg:text-xl">Jenis Kelamin </h5>
                                                    <h5 class="text-base md:text-lg lg:text-xl">:
                                                        {{ $siswa->jns_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="mb-8 w-full rounded-lg bg-white px-4 py-4 text-sm font-normal text-gray-800 shadow-md">
                                            <h4 class="text-xl text-gray-700 md:text-2xl">Profil Orangtua Anda:</h4>
                                            <div>
                                                <div class="grid grid-cols-2">
                                                    <h5 class="text-base md:text-lg lg:text-xl">Nama Ayah</h5>
                                                    <h5 class="text-base capitalize md:text-lg lg:text-xl">:
                                                        {{ $ortu->nama_ayah }}</h5>
                                                </div>
                                                <div class="grid grid-cols-2">
                                                    <h5 class="text-base md:text-lg lg:text-xl">Nama Ibu</h5>

                                                    <h5 class="text-base capitalize md:text-lg lg:text-xl">:

                                                        {{ $ortu->nama_ibu }}</h5>
                                                </div>
                                                <div class="grid grid-cols-2">
                                                    <h5 class="text-base md:text-lg lg:text-xl">Pekerjaan Ayah </h5>

                                                    <h5 class="text-base capitalize md:text-lg lg:text-xl">:

                                                        {{ $ortu->pekerjaan_ayah }}</h5>
                                                </div>
                                                <div class="grid grid-cols-2">
                                                    <h5 class="text-base md:text-lg lg:text-xl">Pekerjaan Ibu </h5>

                                                    <h5 class="text-base capitalize md:text-lg lg:text-xl">:

                                                        {{ $ortu->pekerjaan_ibu }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="mb-8 w-full rounded-lg bg-white px-4 py-4 text-sm font-normal text-gray-800 shadow-md">
                                    <div class="mb-2.5 flex justify-between">
                                        <span class="text-base font-medium">Progress Jawaban</span>
                                        <span class="text-sm font-medium text-blue-700">{{ $persentasi }}%</span>
                                    </div>
                                    <div class="h-1.5 w-full rounded-full bg-gray-200">
                                        <div class="h-1.5 rounded-full bg-blue-600" style="width: {{ $persentasi }}%">

                                        </div>
                                    </div>
                                </div>

                                @php
                                    $jumlahGroupA = $pertanyaans
                                        ->where('type', '1')
                                        ->where('group', 'a')
                                        ->count();
                                    $jumlahGroupB = $pertanyaans
                                        ->where('type', '1')
                                        ->where('group', 'b')
                                        ->count();
                                    $jumlahGroupC = $pertanyaans
                                        ->where('type', '1')
                                        ->where('group', 'c')
                                        ->count();
                                    $jumlahGroupD = $pertanyaans
                                        ->where('type', '1')
                                        ->where('group', 'd')
                                        ->count();
                                    $jumlahGroupE = $pertanyaans
                                        ->where('type', '1')
                                        ->where('group', 'e')
                                        ->count();
                                    $jumlahGroupF = $pertanyaans
                                        ->where('type', '1')
                                        ->where('group', 'f')
                                        ->count();
                                    $jumlahGroupG = $pertanyaans
                                        ->where('type', '1')
                                        ->where('group', 'g')
                                        ->count();
                                    $jumlahGroupA2 = $pertanyaans
                                        ->where('type', '2')
                                        ->where('group', 'a')
                                        ->count();
                                @endphp

                                <div
                                    class="mb-8 w-full rounded-lg bg-white px-4 py-4 text-sm font-normal text-gray-800 shadow-md">
                                    <h2 class="text-xl">Pertanyaan</h2>
                                    <div>
                                        <h3 class="mb-4 text-base">Type 1</h3>
                                        <div class="grid grid-cols-2 gap-x-2 gap-y-12 md:grid-cols-3">
                                            {{-- Jawaban Group A --}}
                                            @if ($jawabans->isNotEmpty() && !empty($jawabans['1']['a']) && $jawabans['1']['a']->count() == $jumlahGroupA)
                                                <div class="w-full">
                                                    <div class="h-1 bg-blue-600"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupA1"
                                                        data-popover-placement="bottom">Group A
                                                        <div data-popover id="popover-groupA1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group A</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 p-3">
                                                                <a href="/isijawaban/1/a"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="align-right" class="w-5"></i>
                                                                    Detail
                                                                </a>
                                                                <a href="/editjawaban/1/a"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-cyan-500 md:text-sm">

                                                                    <i data-feather="edit" class="w-5"></i>
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="w-full">

                                                    <div class="h-1 bg-gray-300"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupA1"
                                                        data-popover-placement="bottom">Group A
                                                        <div data-popover id="popover-groupA1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group A</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 p-3">
                                                                <a href="/kuisioner"
                                                                    class="flex items-center gap-x-1 text-xs text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="edit-3" class="w-5"></i>
                                                                    Jawab Pertanyaan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @endif

                                            {{-- Jawaban Group B --}}
                                            @if ($jawabans->isNotEmpty() && !empty($jawabans['1']['b']) && $jawabans['1']['b']->count() == $jumlahGroupB)
                                                <div class="w-full">

                                                    <div class="h-1 bg-blue-600"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupB1"
                                                        data-popover-placement="bottom">Group B
                                                        <div data-popover id="popover-groupB1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group B</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 p-3">
                                                                <a href="/isijawaban/1/b"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="align-right" class="w-5"></i>
                                                                    Detail
                                                                </a>
                                                                <a href="/editjawaban/1/b"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-cyan-500 md:text-sm">

                                                                    <i data-feather="edit" class="w-5"></i>
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="w-full">

                                                    <div class="h-1 bg-gray-300"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupB1"
                                                        data-popover-placement="bottom">Group B
                                                        <div data-popover id="popover-groupB1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group B</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 py-2 px-3">
                                                                <a href="/kuisioner"
                                                                    class="flex items-center gap-x-1 text-xs text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="edit-3" class="w-5"></i>
                                                                    Jawab Pertanyaan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @endif

                                            {{-- Jawaban Group C --}}
                                            @if ($jawabans->isNotEmpty() && !empty($jawabans['1']['c']) && $jawabans['1']['c']->count() == $jumlahGroupC)
                                                <div class="w-full">

                                                    <div class="h-1 bg-blue-600"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupC1"
                                                        data-popover-placement="bottom">Group C
                                                        <div data-popover id="popover-groupC1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group C</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 p-3">
                                                                <a href="/isijawaban/1/c"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="align-right" class="w-5"></i>
                                                                    Detail
                                                                </a>
                                                                <a href="/editjawaban/1/c"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-cyan-500 md:text-sm">

                                                                    <i data-feather="edit" class="w-5"></i>
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="w-full">

                                                    <div class="h-1 bg-gray-300"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupC1"
                                                        data-popover-placement="bottom">Group C
                                                        <div data-popover id="popover-groupC1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group C</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 py-2 px-3">
                                                                <a href="/kuisioner"
                                                                    class="flex items-center gap-x-1 text-xs text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="edit-3" class="w-5"></i>
                                                                    Jawab Pertanyaan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @endif

                                            {{-- Jawaban Group D --}}
                                            @if ($jawabans->isNotEmpty() && !empty($jawabans['1']['d']) && $jawabans['1']['d']->count() == $jumlahGroupD)
                                                <div class="w-full">

                                                    <div class="h-1 bg-blue-600"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupD1"
                                                        data-popover-placement="bottom">Group D
                                                        <div data-popover id="popover-groupD1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group D</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 p-3">
                                                                <a href="/isijawaban/1/d"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="align-right" class="w-5"></i>
                                                                    Detail
                                                                </a>
                                                                <a href="/editjawaban/1/d"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-cyan-500 md:text-sm">

                                                                    <i data-feather="edit" class="w-5"></i>
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="w-full">

                                                    <div class="h-1 bg-gray-300"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupD1"
                                                        data-popover-placement="bottom">Group D
                                                        <div data-popover id="popover-groupD1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group D</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 py-2 px-3">
                                                                <a href="/kuisioner"
                                                                    class="flex items-center gap-x-1 text-xs text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="edit-3" class="w-5"></i>
                                                                    Jawab Pertanyaan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @endif

                                            {{-- Jawaban Group E --}}
                                            @if ($jawabans->isNotEmpty() && !empty($jawabans['1']['e']) && $jawabans['1']['e']->count() == $jumlahGroupE)
                                                <div class="w-full">

                                                    <div class="h-1 bg-blue-600"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupE1"
                                                        data-popover-placement="bottom">Group E
                                                        <div data-popover id="popover-groupE1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group E</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 p-3">
                                                                <a href="/isijawaban/1/e"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="align-right" class="w-5"></i>
                                                                    Detail
                                                                </a>
                                                                <a href="/editjawaban/1/e"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-cyan-500 md:text-sm">

                                                                    <i data-feather="edit" class="w-5"></i>
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="w-full">

                                                    <div class="h-1 bg-gray-300"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupE1"
                                                        data-popover-placement="bottom">Group E
                                                        <div data-popover id="popover-groupE1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group E</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 py-2 px-3">
                                                                <a href="/kuisioner"
                                                                    class="flex items-center gap-x-1 text-xs text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="edit-3" class="w-5"></i>
                                                                    Jawab Pertanyaan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @endif

                                            {{-- Jawaban Group F --}}
                                            @if ($jawabans->isNotEmpty() && !empty($jawabans['1']['f']) && $jawabans['1']['f']->count() == $jumlahGroupF)
                                                <div class="w-full">

                                                    <div class="h-1 bg-blue-600"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupF1"
                                                        data-popover-placement="bottom">Group F
                                                        <div data-popover id="popover-groupF1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group F</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 p-3">
                                                                <a href="/isijawaban/1/f"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="align-right" class="w-5"></i>
                                                                    Detail
                                                                </a>
                                                                <a href="/editjawaban/1/f"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-cyan-500 md:text-sm">

                                                                    <i data-feather="edit" class="w-5"></i>
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="w-full">

                                                    <div class="h-1 bg-gray-300"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupF1"
                                                        data-popover-placement="bottom">Group F
                                                        <div data-popover id="popover-groupF1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group F</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 py-2 px-3">
                                                                <a href="/kuisioner"
                                                                    class="flex items-center gap-x-1 text-xs text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="edit-3" class="w-5"></i>
                                                                    Jawab Pertanyaan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @endif

                                            {{-- Jawaban Group G --}}
                                            @if ($jawabans->isNotEmpty() && !empty($jawabans['1']['g']) && $jawabans['1']['g']->count() == $jumlahGroupG)
                                                <div class="w-full">
                                                    <div class="h-1 bg-blue-600"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupG1"
                                                        data-popover-placement="bottom">Group G
                                                        <div data-popover id="popover-groupG1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group G</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 p-3">
                                                                <a href="/isijawaban/1/g"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="align-right" class="w-5"></i>
                                                                    Detail
                                                                </a>
                                                                <a href="/editjawaban/1/g"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-cyan-500 md:text-sm">

                                                                    <i data-feather="edit" class="w-5"></i>
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="w-full">

                                                    <div class="h-1 bg-gray-300"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupG1"
                                                        data-popover-placement="bottom">Group G
                                                        <div data-popover id="popover-groupG1" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group G</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 py-2 px-3">
                                                                <a href="/kuisioner"
                                                                    class="flex items-center gap-x-1 text-xs text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="edit-3" class="w-5"></i>
                                                                    Jawab Pertanyaan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                    <div>

                                        <h3 class="my-4 text-base">Type 2</h3>
                                        <div class="grid grid-cols-2 gap-x-2 gap-y-12 md:grid-cols-3">
                                            {{-- Jawaban Group A Type 2 --}}
                                            @if ($jawabans->isNotEmpty() && !empty($jawabans['2']['a']) && $jawabans['2']['a']->count() == $jumlahGroupA2)
                                                <div class="w-full">
                                                    <div class="h-1 bg-blue-600"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupA2"
                                                        data-popover-placement="bottom">Group A
                                                        <div data-popover id="popover-groupA2" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group A</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 p-3">
                                                                <a href="/isijawaban/2/a"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="align-right" class="w-5"></i>
                                                                    Detail
                                                                </a>
                                                                <a href="/editjawaban/2/a"
                                                                    class="flex items-center gap-x-1 pt-0 text-xs font-semibold text-slate-700 hover:text-cyan-500 md:text-sm">

                                                                    <i data-feather="edit" class="w-5"></i>
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="w-full">

                                                    <div class="h-1 bg-gray-300"></div>
                                                    <button class="relative mt-3 w-full text-start text-black"
                                                        data-popover-trigger="click" data-popover-target="popover-groupA2"
                                                        data-popover-placement="bottom">Group A
                                                        <div data-popover id="popover-groupA2" role="tooltip"
                                                            class="invisible absolute z-10 inline-block w-52 rounded-lg border border-gray-200 bg-white text-sm font-light text-gray-500 opacity-0 shadow-sm transition-opacity duration-300 md:w-64">
                                                            <div
                                                                class="rounded-t-lg border-b border-gray-200 bg-gray-100 py-2 px-3">
                                                                <h3 class="text-base font-semibold text-gray-900">
                                                                    Pertanyaan Group A</h3>
                                                            </div>
                                                            <div class="flex gap-x-2 p-3">
                                                                <a href="/kuisioner"
                                                                    class="flex items-center gap-x-1 text-xs text-slate-700 hover:text-blue-600 md:text-sm">

                                                                    <i data-feather="edit-3" class="w-5"></i>
                                                                    Jawab Pertanyaan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
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
