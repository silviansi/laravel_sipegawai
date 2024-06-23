<!-- Modal -->
<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form action="{{ route('pegawai.store') }}" class="row g-3" method="POST">
          @csrf
          <div class="col-md-12">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="col-md-12">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" required>
          </div>
          <div class="col-md-6">
            <label for="no_telp" class="form-label">No. HP</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="col-md-6">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
          </div>
          <div class="col-md-6">
            <label for="tgl_masuk_kerja" class="form-label">Tanggal Masuk Kerja</label>
            <input type="date" class="form-control" id="tgl_masuk_kerja" name="tgl_masuk_kerja" required>
          </div>
          <div class="col-12">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-Laki" required>
              <label class="form-check-label" for="laki_laki">Laki-Laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
              <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
          </div>
          <div class="col-md-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
          </div>
          <div class="col-md-4">
            <label for="bagian" class="form-label">Bagian</label>
            <select id="bagian" class="form-select" name="bagian_id">
              @foreach($bagians as $bagian)
                <option value="{{ $bagian->id }}">{{ $bagian->nama_bagian }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-4">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select id="jabatan" class="form-select" name="jabatan_id">
              @foreach($jabatans as $jabatan)
                <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-4">
            <label for="status" class="form-label">Status</label>
            <select id="status" class="form-select" name="status_id">
              @foreach($statuses as $status)
                <option value="{{ $status->id }}">{{ $status->nama_status }}</option>
              @endforeach
            </select>
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    
    </div>
  </div>
</div>