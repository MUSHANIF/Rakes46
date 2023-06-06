@extends('layouts.dashboard')
@section('search')
    <div class="main-content">
        <main>
            <form action="{{ url('kepala_sekolah') }}" method="GET"
                class="d-none d-sm-inline-block form-inline ml-md-3 my-md-0 mw-100 navbar-search my-2 mr-auto">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm bg-light small border-0"
                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="cari"
                        value="{{ request('cari') }}">
                    <div class="input-group-append">
                        <button class="btn" style="background-color: #256D85;" type="submit">
                            <i class="fas fa-search fa-sm text-white"></i>
                        </button>
                    </div>
                </div>
            </form>
        </main>
    </div>
@endsection
@section('button')
    <div class="main-content">
        <main>
            <a href="{{ route('kepala_sekolah.create') }}" class="d-none d-sm-inline-block btn btn-sm text-white shadow-sm"
                style="background-color: #256D85;"><i class="fas fa-download fa-sm text-white"></i>
                Tambah
            </a>
        </main>
    </div>
@endsection
@section('isi')
    <div class="main-content">
        <main>
            <div class="container">
                <h2 class="my-6 text-2xl font-semibold text-gray-700">
                    List Kepala sekolah
                </h2>
                <table class="mt-3 table" cellpadding="10" cellspace="0">
                    <thead class="align-self-center text-center" style="border: 1px solid rgba(0, 0, 0, 0.4)">
                        <th class="text-light">Nama</th>
                        <th class="text-light">Email</th>
                        <th class="text-light">Action</th>
                    </thead>
                    @foreach ($datas as $key)
                        <tbody>
                            <tr class="align-self-center" style="border: 1px solid rgba(0, 0, 0, 0.4)">
                                <td data-label="Name">{{ $key->name }}</td>
                                <td data-label="Cost">{{ $key->email }}</td>
                                <td class="justify-content-center align-self-center d-flex text-center">
                                    <a class="btn btn-info text-light border-0"
                                        href="{{ route('kepala_sekolah.edit', $key->id) }}">Ubah</a>
                                    <form action="{{ url('kepala_sekolah/' . $key->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="button" id="delete"
                                            class="btn btn-danger ms-2 border-0">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </main>
    </div>

    <script>
        $('#delete').click(function() {
            var form = $(this).closest("form");
            Swal.fire({
                title: 'Are you sure to delete it?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'The data has been deleted.',
                        'success'
                    )
                    setTimeout(() => {
                        form.submit()
                    }, 700);
                }
            })
        });
    </script>
@endsection
