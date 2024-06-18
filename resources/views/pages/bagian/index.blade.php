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
                <tr>
                    <td>1</td>
                    <td>System Architect</td>
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
                    <td>Accountant</td>
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
                    <td>Junior Technical Author</td>
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
                    <td>Senior Javascript Developer</td>
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

@include('pages.bagian.edit')
@include('pages.bagian.create')
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#table-bagian').DataTable( {
                responsive: true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Indonesian.json"
                }
            });
        });
    </script>
@endpush