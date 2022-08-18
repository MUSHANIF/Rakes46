@extends('layouts.admin')
@section('search')
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
@endsection
@section('isi')

  


    <div class="container">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            List Siswa
          </h2>
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
                        
                        <a class="btn btn-info" href="">Ubah</a>
                        <form action="" method="POST" >
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
    </div>

  
@endsection