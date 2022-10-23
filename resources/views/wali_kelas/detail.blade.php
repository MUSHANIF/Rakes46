@extends('layouts.dashboard') 
@section('isi')
<h2 class="my-2 font-semibold text-center text-black dark:text-black text-2xl md:text-3xl">Detail Informasi </h2>
    <div class="mb-8">
        <div class="md:flex gap-x-6">
            <div class="text-black text-sm font-normal w-full px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-gray-100">
                
                <div>
                   <div class="grid grid-cols-2">
                     <h5 class="text-base md:text-lg lg:text-xl">Nama  </h5>
                     <h5 class="text-base md:text-lg lg:text-xl">: {{ $datas->nama_guru == '' ? 'Belum diisi' : $datas->nama_guru }}</h5>
                   </div>
                   <div class="grid grid-cols-2">
                     <h5 class="text-base md:text-lg lg:text-xl">Nip </h5>
                     <h5 class="text-base md:text-lg lg:text-xl">: {{ $datas->nip == '' ? 'Belum diisi' : $datas->nip }}</h5>
                   </div>
                   <div class="grid grid-cols-2">
                     <h5 class="text-base md:text-lg lg:text-xl">Tahun Ajaran </h5>
                     <h5 class="text-base md:text-lg lg:text-xl">: {{ $datas->thn_ajaran == '' ? 'Belum diisi' : $datas->thn_ajaran }}</h5>
                   </div>
                   <div class="grid grid-cols-2">
                     <h5 class="text-base md:text-lg lg:text-xl">Kelas & Jurusan </h5>
                     <h5 class="text-base md:text-lg lg:text-xl">: {{ $datas->kelas == '' ? 'Belum diisi'  : $datas->kelas }} - {{ $datas->jurusan  }}</h5>
                   </div>
                </div>
            </div>
            
      </div>
      <div class="text-black text-sm font-normal w-full px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-200 dark:text-black">
        <h4 class="text-gray-700 text-xl md:text-2xl">Siswa {{ $datas->kelas }} {{ $datas->jurusan }} yang sudah terdaftar dengan jumlah : {{ $siswa->count() == 0 ? 'Belum ada yang mendaftar' : $siswa->count() }}</h4>
        
        <div>
           
          <div class="grid grid-cols-2 ">
           
            @foreach ($siswa as $key ) 
            
           
            <h5 class="text-base md:text-lg lg:text-xl">{{ $key->nama_lengkap }}</h5>
            @endforeach
           
          </div>
        
       </div>
    </div>
    </div>
@endsection