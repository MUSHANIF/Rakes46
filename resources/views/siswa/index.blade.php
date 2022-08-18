@extends('layouts.admin')
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