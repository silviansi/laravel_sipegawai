@extends('layouts.base')
@section('title', 'Manajemen Karyawan')
@section('content')

<!-- Button trigger modal -->
<div class="col-md-3 mx-5 mt-4 mb-2">
    <a href="{{ route('pegawai.create') }}"
        data-bs-toggle="modal" data-bs-target="#ModalTambah" class="btn btn-success btn-md">+ Tambah Data Pegawai
    </a>
</div>

<div class="card flex-fill border-0 mx-5 mt-2">
    <div class="card-body py-4">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <table id="table-pegawai" class="display cell-border" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>Jabatan</th>
                    <th>NIP</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
             
            <tbody>
                @foreach ($pegawais as $pegawai)
                <tr id="row-{{ $pegawai->id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pegawai->nama }}</td>
                    <td>{{ $pegawai->bagian->nama_bagian }}</td>
                    <td>{{ $pegawai->jabatan->nama_jabatan }}</td>
                    <td>{{ $pegawai->nip }}</td>
                    <td>{{ $pegawai->status->nama_status }}</td>
                    <td>
                        <a href="{{ route('pegawai.detail', $pegawai->id) }}"
                            data-bs-toggle="modal" data-bs-target="#ModalDetail{{ $pegawai->id }}" class="btn btn-secondary btn-sm">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('pegawai.edit', $pegawai->id) }}"
                            data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $pegawai->id }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm deleteBtn" data-id="{{ $pegawai->id }}">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </td>
                </tr>
                @include('pages.manajemen-pegawai.edit', ['pegawai' => $pegawai])
                @include('pages.manajemen-pegawai.detail', ['pegawai' => $pegawai])
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('pages.manajemen-pegawai.create')
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#table-pegawai').DataTable( {
                responsive: true,
                "language": {
                    "url": "assets/vendor/Indonesia.json"
                }
            } );
        });

        $('.deleteBtn').click(function() {
            var id = $(this).data('id');
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "/manajemen-pegawai/" + id,
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        success: function (response) {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Data berhasil dihapus.',
                                icon: 'success',
                            }).then((result) => {
                                $('#row-' + id).remove();
                            });
                        },
                        error : function(error) {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Data gagal dihapus.',
                                icon: 'error'
                        })
                    }
                })
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                    title: 'Batal!',
                    text: 'Data batal dihapus.',
                    icon: 'info'
                })
            }
        }
    )
})
</script>

@if (session('success'))
<script>
    Swal.fire({
        title: "Sukses!",
        text: "{{ session('success') }}",
        icon: "success"
    })
</script>
@endif
@if (session('error'))
<script>
    Swal.fire({
        title: "Error!",
        text: "{{ session('error') }}",
        icon: "error",
    })
</script>
@endif
@endpush