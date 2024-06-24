@extends('layouts.base')
@section('title', 'Jabatan')
@section('content')

<!-- Button trigger modal -->
<div class="col-md-3 mx-5 mt-4 mb-2">
    <a href="{{ route('jabatan.create') }}"
        data-bs-toggle="modal" data-bs-target="#ModalTambah" class="btn btn-success btn-md">+ Tambah Jabatan
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
        <table id="table-jabatan" class="display cell-border" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
             
            <tbody>
                @foreach($jabatans as $jabatan)
                <tr id="row-{{ $jabatan->id }}">
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $jabatan->nama_jabatan }}</td>
                    <td class="text-center">
                        <a href="{{ route('jabatan.edit', $jabatan->id) }}"
                            data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $jabatan->id }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm deleteBtn" id="deleteBtn" data-id="{{ $jabatan->id }}">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </td>
                </tr>
                @include('pages.jabatan.edit', ['jabatan' => $jabatan])
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('pages.jabatan.create')
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#table-jabatan').DataTable( {
                "columnDefs": [
                { "width": "5%", "targets": 0 },
                { "width": "45%", "targets": 1 },  
                { "width": "45%", "targets": 2 }   
                ],
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
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/jabatan/" + id,
                        type: "DELETE",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Sukses!',
                                text: 'Data berhasil dihapus.',
                                icon: 'success'
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
                        title: 'Batal',
                        text: 'Data tidak jadi dihapus.',
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