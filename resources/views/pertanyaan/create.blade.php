@extends('layouts.dashboard')
@section('isi')

<div class="main">
    <main>
        <div class="container" style="position: relative;">
    
            <form method="POST" action="{{ route('pertanyaan.store') }}" >
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput2">Group</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="group" >
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">No</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="no" >
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Pertanyaan</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="pertanyaan" >
                </div>
                <label for="formFile" class="form-label">Type</label>
                    <select class="form-select" aria-label="Default select example" name="type" required>
                      <option value="1"> 1</option>
                      <option value="2">2</option>
                      <option value="3"> 3 </option>
                      <option value="4">4</option>
                    </select>
                <button style="background-color: #256D85; border: unset" type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </main>
</div>

@endsection