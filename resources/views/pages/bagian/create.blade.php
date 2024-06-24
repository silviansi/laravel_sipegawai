<!-- Modal -->
<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Divisi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('bagian.store') }}" method="POST" class="row g-3" id="tambahBagian">
              @csrf
              <div class="col-md-12">
                <label for="nama_bagian" class="form-label">Divisi</label>
                <input type="text" class="form-control" id="nama_bagian" name="nama_bagian" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
        </div>
      </div>
    </div>
</div>