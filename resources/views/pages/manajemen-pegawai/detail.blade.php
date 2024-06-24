<!-- Modal -->
<div class="modal fade" id="ModalDetail{{ $pegawai->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $pegawai->nip }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="no_telp" class="form-label">No. HP</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $pegawai->no_telp }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $pegawai->email }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $pegawai->tgl_lahir }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="tgl_masuk_kerja" class="form-label">Tanggal Masuk Kerja</label>
                        <input type="date" class="form-control" id="tgl_masuk_kerja" name="tgl_masuk_kerja" value="{{ $pegawai->tgl_masuk_kerja }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $pegawai->jenis_kelamin }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pegawai->alamat }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="bagian" class="form-label">Divisi</label>
                        <input type="text" class="form-control" id="bagian" name="bagian" value="{{ $pegawai->bagian->nama_bagian }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $pegawai->jabatan->nama_jabatan }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" name="status" value="{{ $pegawai->status->nama_status }}" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>