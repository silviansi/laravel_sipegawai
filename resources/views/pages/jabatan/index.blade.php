@extends('layouts.base')
@section('title', 'Jabatan')
@section('content')

<!-- Button trigger modal -->
<div class="col-md-3 mx-5 mt-4 mb-2">
    <a href=""
        data-bs-toggle="modal" data-bs-target="#ModalTambah" class="btn btn-success btn-md">+ Tambah Data Jabatan
    </a>
</div>

<div class="card flex-fill border-0 mx-5 mt-2">
    <div class="card-body py-4">
        <table id="table-jabatan" class="display cell-border" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Bagian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
             
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kepala Bagian</td>
                    <td>
                        <a href=""
                            data-bs-toggle="modal" data-bs-target="#ModalEdit" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Staff</td>
                    <td>
                        <a href=""
                            data-bs-toggle="modal" data-bs-target="#ModalEdit" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Asisten</td>
                    <td>
                        <a href=""
                            data-bs-toggle="modal" data-bs-target="#ModalEdit" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Magang</td>
                    <td>
                        <a href=""
                            data-bs-toggle="modal" data-bs-target="#ModalEdit" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@include('pages.jabatan.edit')
@include('pages.jabatan.create')
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#table-jabatan').DataTable( {
                responsive: true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Indonesian.json"
                }
            } );
        });
    </script>
@endpush