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
                                <span class="input-group-text" id="inputGroup-sizing-sm"></span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">N</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nama Siswa</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                                <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Tempat Lahir</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal Lahir</span>
                                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div>
                                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                    <option selected>Jenis Kelamin</option>
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki-Laki</option>

                                </select>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Golongan Darah</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Anak Ke</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div>
                                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                    <option selected>Tinggal Bersama</option>
                                    <option value="Orang Tua">Orang Tua</option>
                                    <option value="Wali">Wali</option>
                                </select>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Alamat</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nomor Telepon</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div>
                                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                    <option selected>Tinggal Bersama</option>
                                    <option value="Tidak">Tidak</option>
                                    <option value="Netra">Netra</option>
                                    <option value="Rungu">Rungu</option>
                                    <option value="Rungu Wicara">Rungu Wicara</option>
                                    <option value="Grahita">Grahita</option>
                                    <option value="Daksa">Daksa</option>
                                    <option value="Autuuisme">Autisme</option>
                                    <option value="Ganda">Ganda</option>
                                    <option value="ADHD">ADHD</option>
                                </select>
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