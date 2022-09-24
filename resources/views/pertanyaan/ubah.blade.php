@extends('layouts.dashboard')
@section('isi')

  <div class="main-content">
    <main>
      <div class="container" style="position: relative;">
    
        <form method="POST" action="{{ route('pertanyaan.update',$datas->id) }}" >
            @csrf
                <input type="hidden" name="_method" value="PATCH">
         
            <div class="form-group">
                <label for="formGroupExampleInput">Group</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="group" value="{{ $datas->group }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">No</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="no" value="{{ $datas->no }}">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Pertanyaan</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="pertanyaan" value="{{ $datas->pertanyaan }}">
          </div>
         
            <label for="formFile" class="form-label">Type</label>
                <select class="form-select" aria-label="Default select example" name="type" required>
                <option value="1"> 1</option>
                  <option value="2">2</option>
                  <option value="3"> 3 </option>
                  <option value="4"> 4</option>
      
                </select>
            <button style="background-color: #256D85; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
        </form>
      </div>
    </main>
  </div>

<!-- Optional JavaScript; choose one of the two! -->






<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection