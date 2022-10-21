@extends('layouts.admin')
@section('isi')

<div class="main-content">
    <main>
        <div class="container" style="position: relative;">
            <form action="{{ route('orangtua.store') }}" method="post" >
                @csrf
                 <div class="form-group">
                    <label for="formGroupExampleInput">NIK</label>
                    <input type="text" class="form-control" id="StoreID" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">NAMA</label>
                    <input type="text" class="form-control" id="LocID" name="name" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">email</label>
                    <input type="email" class="form-control" id="LocID" name="email" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">NO HP</label>
                    <input type="text" class="form-control" id="PriceID" name="hp" required>
                </div>
              
                    <input type="hidden" class="form-control" id="ProdID" name="level" value="ADMIN" required>
               
                <div class="form-group">
                    <label for="formGroupExampleInput">Password</label>
                    <input type="password" class="form-control" id="ProdID" name="password" required>
                </div>
        
                 <button style="background-color: #256D85; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
                 <button type="reset" class="btn btn-danger border-0 mt-4">Reset</button>
            </form>
        </div>
    </main>
</div>

@endsection