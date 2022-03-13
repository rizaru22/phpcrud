<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Pengguna</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="db/db_pengguna.php?proses=insert" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username Anda" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label>Select</label>
                <select class="form-control" name="level">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>

                </select>
            </div>
            <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-warning float-right"><i class="fa fa-retweet"></i> Reset</button>
        </div>
    </form>
</div>