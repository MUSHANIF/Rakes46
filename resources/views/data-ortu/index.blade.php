@extends('layouts.dashboard')

@section('isi')
<div class="main-content">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 align-self-center justify-content-center">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h3 class="text-center">DATA ORANG TUA</h3>
                         <form action="" method="POST">
                             <input type="hidden" name="id">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nama Ayah</span>
                                <input name="nama_ayah" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Tempat Lahir Ayah</span>
                                <input name="tmplahir_ayah" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Pekerjaan Ayah</span>
                                <input name="pekerjaan_ayah" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Alamat Ayah</span>
                                <input name="alamat_ayah" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nama Ibu</span>
                                <input name="nama_ibu" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Tempat Lahir Ibu</span>
                                <input name="tmplahir_ibu" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Pekerjaan Ibu</span>
                                <input name="pekerjaan_ibu" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Alamat Ibu</span>
                                <input name="alamat_ibu" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                         
                         
                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
    
@endsection