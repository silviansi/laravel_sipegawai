<!-- Modal -->
<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Karyawan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3">
                <div class="col-md-12">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="col-md-6">
                  <label for="no_telp" class="form-label">No. HP</label>
                  <input type="text" class="form-control" id="no_telp" name="no_telp">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-6">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                </div>
                <div class="col-md-6">
                    <label for="tgl_masuk_kerja" class="form-label">Tanggal Masuk Kerja</label>
                    <input type="date" class="form-control" id="tgl_masuk_kerja" name="tgl_masuk_kerja">
                </div>
                <div class="col-12">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="col-md-4">
                    <label for="bagian" class="form-label">Bagian</label>
                    <select id="bagian" class="form-select">
                      <option>IT</option>
                      <option>ATR</option>
                      <option>LAB</option>
                    </select>
                </div>
                <div class="col-md-4">
                  <label for="jabatan" class="form-label">Jabatan</label>
                  <select id="jabatan" class="form-select">
                    <option>Kepala Bagian</option>
                    <option>Magang</option>
                  </select>
                </div>
                <div class="col-md-4">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" class="form-select">
                      <option>Aktif</option>
                      <option>Pensiun</option>
                    </select>
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
</div>