@extends('layouts.dashboard')

@section('isi')

<div class="main-content">
    <main>
       <div class="container" style="position: relative">
          <form action="{{ route('puskesmas.store') }}" method="post">
             @csrf
             <div class="form-group">
                <label for="formGroupExampleInput">Nama</label>
                <input type="text" class="form-control" id="LocID" name="name" value="{{ $errors->get('name')? "" : old('name') }}" required>
             </div>
             <div class="form-group">
                <label for="formGroupExampleInput">Email</label>
                <input type="email" class="form-control" id="LocID" name="email" value="{{ $errors->get('email')? "" : old('email') }}" required>
             </div>
             <input type="hidden" class="form-control" id="ProdID" name="level" value="3" required />
             <div class="form-group">
                <label for="formGroupExampleInput">Password</label>
                <input type="password" class="form-control" id="ProdID" name="password" required />
             </div>
             <button style="background-color: #256d85; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
             <button type="reset" class="btn btn-danger border-0 mt-4">Reset</button>
          </form>
       </div>
    </main>
 </div>

@endsection