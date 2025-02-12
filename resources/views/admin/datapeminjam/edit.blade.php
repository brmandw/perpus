<div class="modal fade" id="editPeminjam{{ $users->id }}" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-3">Data Admin</h5>

              <form class="row g-3" action="{{ route('admin.datapeminjam.update', ['id' => $users->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12 mb-3">
                  <label for="name" class="form-label">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $users->name) }}">
                </div>
                <div class="col-12 mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="username" value="{{ old('username', $users->username) }}">
                </div>
                <div class="col-12 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $users->email) }}">
                </div>
                <div class="col-12 mb-3">
                  <label for="#" class="form-label">Alamat</label>
                  <input type="text-area" name="#" class="form-control" id="#" value="{{ old('#', $users->username) }}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
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