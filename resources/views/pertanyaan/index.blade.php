@extends('layouts.dashboard')
@section('search')
<form action="{{ url('pertanyaan') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
@section("button")
<a href="{{ route('pertanyaan.create') }}" class="d-none d-sm-inline-block btn btn-sm text-white  shadow-sm" style="background-color: #256D85;"><i
    class="fas fa-download fa-sm text-white"></i>Tambah</a>
@endsection
@section('isi')

  


    <div class="container">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            List Pertanyaan
          </h2>
        <table class="table mt-3" cellpadding="10" cellspace="0">
            <thead class="align-self-center text-center">
                
               
                <th>Type</th>
                <th>Group</th>
        
                <th>No</th>
                <th>Pertanyaan</th>
                <th>Action</th>
                
            </thead>
           
            @foreach ($datas as $key) 
            <tbody>
                <tr class="align-self-center" style="border: 1px solid black;">
                
              
                    <td data-label="Type">{{ $key->type }}</td>
                    <td data-label="Group">{{ $key->group }}</td>
                    <td data-label="No">{{ $key->no }}</td>
                    <td data-label="Pertanyaan">{{ $key->pertanyaan }}</td>
                
                     <td class="text-center justify-content-center align-self-center d-flex">
                        
                        <a class="btn btn-info" href="{{ route('pertanyaan.edit',$key->id)}}">Ubah</a>
                        <form action="{{ url('pertanyaan/'.$key->id) }}" method="POST" >
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger ms-2">Delete</button>
                        </form>
                      
                    </td>
                
                </tr>
            </tbody>
            @endforeach
           
    
        </table>
    </div>

  
@endsection