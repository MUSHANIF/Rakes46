@extends('layouts.dashboard') @section('search')
<div class="main-content">
   <main>
      <form action="{{ url('wali_kelas') }}" method="GET" class="">
         @csrf
         <div class="input-group">
            <input type="text" class="form-control form-control-sm bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="cari" value="{{ request('cari') }}" />
            <div class="input-group-append">
               <button class="btn" style="background-color: #256d85" type="submit">
                  <i class="fas fa-search fa-sm text-white"></i>
               </button>
            </div>
         </div>
      </form>
   </main>
</div>
@endsection 
@section("button")
<div class="main-content">
   <main>
      <a href="{{ route('wali_kelas.create') }}" class=" d-sm-inline-block btn btn-sm text-white shadow-sm" style="background-color: #256d85"><i class="fas fa-download fa-sm text-white"></i> Tambah</a>
   </main>
</div>
@endsection
@section('isi')

<div class="main-content">
   <main>
      <div class="container">
         <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">List Wali Kelas</h2>
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
                     @can('superadmin')
                     <a class="btn btn-info text-light border-0" href="{{ route('wali_kelas.edit',$key->id)}}">Ubah</a>
                     <form action="{{ route('wali_kelas.destroy',$key->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="button" class="btn btn-danger border-0 ms-2 reset_data">Reset Data Guru</button>
                     </form>
                     @else
                     <a class="btn btn-detail border-0 ml-2" href="{{ route('wali_kelaskepala.show',$key->id)}}">Detail</a>
                     @endcan
                  </td>
               </tr>
            </tbody>
            @endforeach
         </table>
      </div>
   </main>
</div>

<script>
   $('.reset_data').click(function() {
      var form =  $(this).closest("form");
      Swal.fire({
         title: 'Are you sure?',
         text: "You won't be able to revert this!",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Yes, reset it!'
         }).then((result) => {
         if (result.isConfirmed) {
            Swal.fire(
               'Deleted!',
               'The data has been deleted.',
               'success'
            )
            setTimeout(() => {
               form.submit()
            }, 1000);
         }
         })
   });
</script>

@endsection
