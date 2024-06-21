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
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $bagian->nama_bagian }}</td>
                    <td>
                        <a href="{{ route('bagian.edit', $bagian->id) }}"
                            class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $bagian->id }}">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('pages.bagian.edit')
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