@extends('layouts.base')
@section('title', 'Manajemen Karyawan')
@section('content')

<!-- Button trigger modal -->
<div class="col-md-3 mx-5 mt-4 mb-2">
    <a href=""
        data-bs-toggle="modal" data-bs-target="#ModalTambah" class="btn btn-success btn-md">+ Tambah Data Karyawan
    </a>
</div>

<div class="card flex-fill border-0 mx-5 mt-2">
    <div class="card-body py-4">
        <table id="table-karyawan" class="display cell-border" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
             
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Silvia Nanda</td>
                    <td>Tulangan</td>
                    <td>0823012888</td>
                    <td>Aktif</td>
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
                    <td>Rizatul</td>
                    <td>Tokyo</td>
                    <td>082833323</td>
                    <td>Aktif</td>
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
                    <td>Technical Author</td>
                    <td>San Francisco</td>
                    <td>0382323232</td>
                    <td>Aktif</td>
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
                    <td>Fadlan Fadillah</td>
                    <td>Edinburgh</td>
                    <td>084373434</td>
                    <td>Pensiun</td>
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
                    <td>5</td>
                    <td>Dia Yunda</td>
                    <td>San Francisco</td>
                    <td>023838232</td>
                    <td>Cuti</td>
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

@include('pages.manajemen-karyawan.edit')
@include('pages.manajemen-karyawan.create')
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#table-karyawan').DataTable( {
                responsive: true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Indonesian.json"
                }
            } );
        });
    </script>
@endpush