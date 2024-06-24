<!-- Modal -->
<div class="modal fade" id="ModalEdit{{ $pegawai->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" class="row g-3">
          @csrf
          @method('PUT')
          <div class="col-md-12">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}">
          </div>
          <div class="col-md-12">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ $pegawai->nip }}">
          </div>
          <div class="col-md-12">
            <label for="no_telp" class="form-label">No. HP</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $pegawai->no_telp }}">
          </div>
          <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $pegawai->email }}">
          </div>
          <div class="col-md-12">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $pegawai->tgl_lahir }}">
          </div>
          <div class="col-md-12">
            <label for="tgl_masuk_kerja" class="form-label">Tanggal Masuk Kerja</label>
            <input type="date" class="form-control" id="tgl_masuk_kerja" name="tgl_masuk_kerja" value="{{ $pegawai->tgl_masuk_kerja }}">
          </div>
          <div class="col-md-12">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-Laki" {{ $pegawai->jenis_kelamin == 'Laki-Laki' ? 'checked' : '' }}>
              <label class="form-check-label" for="laki_laki">Laki-Laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" {{ $pegawai->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
              <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
          </div>
          <div class="col-md-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pegawai->alamat }}">
          </div>
          <div class="col-md-12">
            <label for="bagian_id" class="form-label">Divisi</label>
            <select id="bagian_id" class="form-select" name="bagian_id">
              <option value="{{ $pegawai->bagian->id }}" selected>{{ $pegawai->bagian->nama_bagian }}</option>
              @foreach ($bagians as $bagian)
              <option value="{{ $bagian->id }}">{{ $bagian->nama_bagian }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-12">
            <label for="jabatan_id" class="form-label">Jabatan</label>
            <select id="jabatan_id" class="form-select" name="jabatan_id">
              <option value="{{ $pegawai->jabatan->id }}" selected>{{ $pegawai->jabatan->nama_jabatan }}</option>
            @foreach ($jabatans as $jabatan)
            <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
            @endforeach
            </select>
          </div>
          <div class="col-md-12">
            <label for="status_id" class="form-label">Status</label>
            <select id="status_id" class="form-select" name="status_id">
              <option value="{{ $pegawai->status->id }}" selected>{{ $pegawai->status->nama_status }}</option>
              @foreach ($statuses as $status)
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