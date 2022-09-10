@extends('layouts.admin')
@section('search')
<div class="main-content">
    <main>
        <form action="{{ url('siswa') }}" method="GET" class="">
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
    </main>
</div>
@endsection

@section('isi')

<div class="main-content">
    <main>
        <div class="container">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                List Orangtua
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
                        <td data-label="Email">{{ $key->email }}</td>
                    
                         <td class="text-center justify-content-center align-self-center d-flex">
                            
                            <a class="btn btn-info" href="{{ route('orangtua.edit',$key->id)}}">Ubah</a>
                            <form action="{{ url('orangtua/'.$key->id) }}" method="POST">
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
    </main>
</div>
@endsection