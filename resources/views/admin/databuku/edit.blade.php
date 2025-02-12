<div class="modal fade" id="editBuku{{ $buku->id }}" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-3">Data Buku</h5>

              <form class="row g-3" action="{{ route('admin.databuku.update', ['id' => $buku->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul</label>
                  <input type="text" name="judul" class="form-control" id="judul" value="{{ old('judul', $buku->judul) }}">
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control" id="penulis" value="{{ old('penulis', $buku->penulis) }}">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" id="penerbit" value="{{ old('penerbit', $buku->penerbit) }}">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" name="tahun_terbit" class="form-control" id="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" min="1000" max="{{ date('Y') }}">
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Cover</label>
                    <input class="form-control" type="file" name="cover" id="cover" value="{{ old('cover', $buku->cover) }}">
                </div>
                    
                <div class="text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Basic Modal-->