<!-- Modal -->
<div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Karyawan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3">
                <div class="col-md-12">
                  <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                  <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan">
                </div>
                <div class="col-md-12">
                  <label for="nik" class="form-label">NIK</label>
                  <input type="text" class="form-control" id="nik" name="nik">
                </div>
                <div class="col-md-12">
                  <label for="id_jabatan" class="form-label">Jabatan</label>
                  <select id="id_jabatan" class="form-select" name="id_jabatan">
                    <option selected>Pilih Jabatan</option>
                    {{-- @foreach ($jabatan as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                    @endforeach --}}
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="id_bagian" class="form-label">Bagian</label>
                  <select id="id_bagian" class="form-select" name="id_bagian">
                    <option selected>Pilih Bagian</option>
                    {{-- @foreach ($bagian as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_bagian }}</option>
                    @endforeach --}}
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="id_status" class="form-label">Status</label>
                  <select id="id_status" class="form-select" name="id_status">
                    <option selected>Pilih Status</option>
                    {{-- @foreach ($status as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_status }}</option>
                    @endforeach --}}
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