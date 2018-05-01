

    <!-- content header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">Create User</li>

              <form class="form-horizontal" class="/users" method="post">
                <div class="box-body">


                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="name" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="email" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="password" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="gender" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="no_telp" class="col-sm-2 control-label">no_telp</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="no_telp" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">address</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="address" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="photo_user" class="col-sm-2 control-label">photo_user</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="photo_user" required>
                    </div>
                  </div>

                <div class="box-footer">
                  <button type="submit" name="submit" value="Create" class="btn btn-success pull-right">
                  Tambahkan Nasabah</button>
                  {{ csrf_field() }}
                </div>
              </form>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
