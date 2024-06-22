@extends('layouts.base')
@section('title', 'Bagian')
@section('content')

<!-- Button trigger modal -->
<div class="col-md-3 mx-5 mt-4 mb-2">
    <a href=""
        data-bs-toggle="modal" data-bs-target="#ModalTambah" class="btn btn-success btn-md">+ Tambah Data Bagian
    </a>
</div>

<div class="card flex-fill border-0 mx-5 mt-2">
    <div class="card-body py-4">
        <table id="table-bagian" class="display cell-border" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Bagian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
             
            <tbody>
                @foreach($bagians as $bagian)
                <tr id="row-{{ $bagian->id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $bagian->nama_bagian }}</td>
                    <td>
                        <a href="{{ route('bagian.edit', $bagian->id) }}"
                            class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $bagian->id }}">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm deleteBtn" id="deleteBtn" data-id="{{ $bagian->id }}">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                </tr>
                @include('pages.bagian.edit', ['bagian' => $bagian])
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('pages.bagian.create')
@endsection

@push('script')
    <script>
        // DataTable Versi Indonesia
        $(document).ready(function() {
            $('#table-bagian').DataTable( {
                responsive: true,
                "language": {
                    "url": "assets/vendor/Indonesia.json"
                }
            });
        });

        $('.deleteBtn').click(function(){
            var id = $(this).data('id');
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "/bagian/" + id,
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