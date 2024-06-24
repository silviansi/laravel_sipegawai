<!-- Modal -->
<div class="modal fade" id="ModalEdit{{ $status->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit StatusPegawai</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('status.update', $status->id) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-md-12">
              <label for="nama_status" class="form-label">Status Pegawai</label>
              <input type="text" class="form-control" id="nama_status" name="nama_status" value={{ $status->nama_status }}>
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