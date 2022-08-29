@extends('layouts.dashboard')
@section('isi')
<div class="main-content">
  <main>
    <div class="main-content">
      <main>
        <div class="container" style="position: relative;">
      
          <form method="POST" action="{{ route('wali_kelas.update',$datas->id) }}" >
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
                      <option value="2">Orang tua</option>
                      <option value="4">Kepala sekolah</option>
                      <option value="4">Puskesmas</option>
                      <option value="3">Wali kelas </option>
                  </select>
              <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
          </form>
        </div>
      </main>
    </div>
  </main>
</div>

<!-- Optional JavaScript; choose one of the two! -->






<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection