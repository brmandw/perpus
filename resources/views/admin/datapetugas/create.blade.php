<div class="modal fade" id="tambahPetugas" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Admin</h5>

          
              <!-- No Labels Form -->
              <form class="row g-3" action="{{ route('admin.datapetugas.store') }}" method="POST">
                @csrf <!-- CSRF Token -->
                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}"  placeholder="Your Name" required>
                </div>
                <div class="col-md-12">
                  <input type="text" name="username" class="form-control" id="username" value="{{ old('username') }}"  placeholder="Username" required>
                </div>
                <div class="col-md-12">
                  <input type="email" name="email" class="form-control" id="ema¡l" value="{{ old('email') }}"  placeholder="Email" required>
                </div>
                <div class="col-md-12">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="col-12">
                  <input type="password" name="password_confirmation" class="form-control form-control-user" id="password_confirmation" placeholder="Confirm Password" required>
                </div>
                <select name="role" class="form-control">
                  <option value="petugas">Petugas</option>
              </select>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Basic Modal-->