<!-- Modal -->
<div class="modal fade" id="ModalEdit{{ $bagian->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Bagian</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('bagian.update', $bagian->id) }}" method="POST" class="row g-3" id="editBagian">
            @csrf
            @method('PUT')
            <div class="col-md-12">
              <label for="nama_bagian" class="form-label">Nama Bagian</label>
                <input type="text" class="form-control" id="nama_bagian" name="nama_bagian" value="{{ $bagian->nama_bagian }}">
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