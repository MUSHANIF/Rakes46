@extends('layouts.admin')
@section('isi')

<div class="main-content">
  <main>
    <div class="container" style="position: relative;">
      
      <form method="POST" action="{{ route('orangtua.update',$datas->id) }}" >
          @csrf
              <input type="hidden" name="_method" value="PATCH">
      
          <div class="form-group">
              <label for="formGroupExampleInput">name</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{ $datas->name }}">
          </div>
          <div class="form-group">
              <label for="formGroupExampleInput2">email</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="email" value="{{ $datas->email }}">
          </div>
      
          <label for="formFile" class="form-label">Ubah level</label>
              <select class="form-select" aria-label="Default select example" name="opsi" required>
                <option value="4">Kepala sekolah</option>
                <option value="4">Puskesmas</option>
                <option value="3">Wali kelas </option>
                <option value="2">Orang tua</option>
              </select>
          <button style="background-color: #256D85; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
      </form>
    </div>
  </main>
</div>

@endsection