@extends('layouts.dashboard') @section('search')
    <form action="{{ url('pertanyaan') }}" method="GET" class="">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control form-control-sm bg-light small border-0" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2" name="cari" value="{{ request('cari') }}" />
            <div class="input-group-append d-none d-sm-inline-block">
                <button class="btn" style="background-color: #256d85" type="submit">
                    <i class="fas fa-search fa-sm text-white"></i>
                </button>
            </div>
        </div>
    </form>
@endsection

@section('button')
    <div class="main-content">
        <main>
            <div class="container">
                <a href="{{ route('pertanyaan.create') }}" class="btn btn-sm text-white shadow-sm"
                    style="background-color: #256d85;"><i class="fas fa-download fa-sm text-white"></i>
                    Tambah
                </a>
            </div>
        </main>
    </div>
@endsection

@section('isi')
    <div class="main-content">
        <main>
            <div class="container">
                <h2 class="my-6 text-2xl font-semibold text-gray-700">List Pertanyaan</h2>
                <table class="mt-3 table" cellpadding="10" cellspace="0">
                    <thead class="align-self-center text-center" style="border: 1px solid rgba(0, 0, 0, 0.4)">
                        <th class="text-light">Type</th>
                        <th class="text-light">Group</th>
                        <th class="text-light">No</th>
                        <th class="text-light">Pertanyaan</th>
                        <th class="text-light">Action</th>
                    </thead>

                    @foreach ($pertanyaans as $key)
                        <tbody>
                            <tr class="align-self-center" style="border: 1px solid rgba(0, 0, 0, 0.4)">
                                <td data-label="Type">{{ $key->type }}</td>
                                <td data-label="Group">{{ $key->group }}</td>
                                <td data-label="No">{{ $key->no }}</td>
                                <td data-label="Pertanyaan">{{ $key->pertanyaan }}</td>

                                <td class="justify-content-center align-self-center d-flex text-center">
                                    <a class="btn btn-info text-light border-0"
                                        href="{{ route('pertanyaan.edit', $key->id) }}">Ubah</a>
                                    <form action="{{ url('pertanyaan/' . $key->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="btn btn-danger ms-2 border-0">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </main>
    </div>
@endsection
