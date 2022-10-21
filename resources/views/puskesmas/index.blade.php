@extends('layouts.dashboard') 

@section('search')
<form action="{{ url('puskesmas') }}" method="GET" class="">
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
@endsection 

@section("button")
<a href="{{ route('puskesmas.create') }}" class="d-none d-sm-inline-block btn btn-sm text-white shadow-sm" style="background-color: #256d85"><i class="fas fa-download fa-sm text-white"></i> Tambah</a>
@endsection 

@section('isi')

<div class="main-content">
   <main>
      <div class="container">
         <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">List Puskesmas</h2>
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
                     <a class="btn btn-info text-light border-0" href="{{ route('puskesmas.edit',$key->id)}}">Ubah</a>
                     <form action="{{ url('puskesmas/'.$key->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="button" id="delete" class="btn btn-danger border-0 ms-2">Delete</button>
                     </form>
                     @else
                     <a class="btn ml-2 border-0 btn-detail" onclick="showbutton()">Detail</a>
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
   $('#delete').click(function() {
      var form =  $(this).closest("form");
      Swal.fire({
         title: 'Are you sure to delete it?',
         text: "You won't be able to revert this!",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#d33',
         cancelButtonColor: '#3085d6',
         confirmButtonText: 'Yes, delete it!'
         }).then((result) => {
         if (result.isConfirmed) {
            Swal.fire(
               'Deleted!',
               'The data has been deleted.',
               'success'
            )
            setTimeout(() => {
               form.submit()
            }, 700);
         }
         })
   });
</script>

@endsection
