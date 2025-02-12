<div class="modal fade" id="tambahBuku" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content"> <!-- Gunakan modal-content langsung -->
          <div class="modal-header">
              <h5 class="modal-title">Tambah Buku</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Data Buku</h5>
                <form action="{{ route('admin.databuku.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" name="penulis" class="form-control" id="penulis" required>
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" id="penerbit" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" name="tahun_terbit" class="form-control" id="tahun_terbit" required min="1000" max="{{ date('Y') }}">
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Cover</label>
                        <input class="form-control" type="file" name="cover" id="cover" required>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              </div>
            </div>  
          </div>
      </div>
  </div>
</div>
