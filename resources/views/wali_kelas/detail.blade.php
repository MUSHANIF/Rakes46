@extends('layouts.dashboard') 
@section('isi')
<h2 class="my-2 font-semibold text-center text-black text-2xl md:text-3xl">Detail Informasi</h2>
<div class="mb-8">
   <div class="md:flex gap-x-6">
      <div class="text-black text-sm font-normal w-full px-4 py-4 mb-8 bg-white rounded-lg shadow-md">
         <div>
            <div class="grid grid-cols-2">
               <h5 class="text-base md:text-lg lg:text-xl">Nama</h5>
               <h5 class="text-base md:text-lg lg:text-xl">: {{ $datas->nama_guru ?? 'Belum diisi' }}</h5>
            </div>
            <div class="grid grid-cols-2">
               <h5 class="text-base md:text-lg lg:text-xl">NIP</h5>
               <h5 class="text-base md:text-lg lg:text-xl">: {{ $datas->nip ?? 'Belum diisi' }}</h5>
            </div>
            <div class="grid grid-cols-2">
               <h5 class="text-base md:text-lg lg:text-xl">Tahun Ajaran</h5>
               <h5 class="text-base md:text-lg lg:text-xl">: {{ $datas->thn_ajaran ?? 'Belum diisi' }}</h5>
            </div>
            <div class="grid grid-cols-2">
               <h5 class="text-base md:text-lg lg:text-xl">Kelas & Jurusan</h5>
               <h5 class="text-base md:text-lg lg:text-xl">: {{ $datas->kelas}} - {{ $datas->jurusan }}</h5>
            </div>
         </div>
      </div>
   </div>

   <div class="text-black text-sm font-normal w-full px-4 py-4 mb-8 bg-white rounded-lg shadow-md">
      <h4 class="text-xl md:text-2xl flex justify-between items-center">
        <span>Siswa {{ $datas->kelas }} {{ $datas->jurusan }} yang sudah terdaftar </span>
        <span class="text-xl">{{ $siswa->count() }}</span>
      </h4>

      <div>
         <div class="grid grid-cols-2 mt-3 gap-y-1 gap-x-2">
            @foreach ($siswa as $key )
            <div>
              <h3 class="!text-gray-800 text-base md:text-lg mb-1">{{ $key->nama_lengkap }}</h3>
              <p class="!text-slate-700 text-sm">{{ $key->nisn }} | {{ $key->nis }}</p>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
@endsection
