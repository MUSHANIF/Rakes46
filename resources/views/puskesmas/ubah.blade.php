@extends('layouts.dashboard')
@section('isi')

<div class="main-content">
    <main>
        <div class="container" style="position: relative;">
            <form method="POST" action="{{ route('puskesmas.update',$datas->id) }}" >
                @csrf
                <input type="hidden" name="_method" value="PATCH">
        
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{ $datas->name }}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="email" value="{{ $datas->email }}">
                </div>
        
                <label for="formFile" class="form-label">Ubah level</label>
                <select class="form-select" aria-label="Default select example" name="opsi" required>
                    <option value="3">Puskesmas</option>
                    <option value="4">Kepala sekolah</option>      
                    <option value="2">Wali kelas </option>
                    <option value="1">Siswa</option>
                </select>
                <button style="background-color: #256D85; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
            </form>
        </div>
    </main>
</div>

@endsection