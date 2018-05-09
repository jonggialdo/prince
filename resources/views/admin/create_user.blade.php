@extends('admin.dashboard')

@section('content')
    <!-- content header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Create User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid col-md-8">
          <div class="card-body">
            <div class="row"> -->
              <div class="col-md-8">
                <form method="POST" class="/users" action="#">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" align="middle" class="form-control" name="name" value="" required autofocus id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" value="" required autofocus id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="photo_user">Photo profile</label>
                        <input type="text" align="middle" class="form-control" name="photo_user" value="" required autofocus id="name" placeholder="Enter name">
<!--
                        <div class="input-group">
                        <input type="file" class="custom-file-input" id="photo_user">
                        <div class="custom-file">
                            <label class="custom-file-label" for="photo_user">Choose file</label>
                        </div> -->
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                        </div> -->
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" name="gender" type="radio" value="Female">
                            <label class="form-check-label">Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="gender" type="radio" value="Male">
                            <label class="form-check-label">Male</label>
                        </div> -->
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" rows="3" name="address"
                        placeholder="Enter address..." required autofocus></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Phone Number</label>
                        <input type="text" align="middle" class="form-control" name="no_telp" value="" required autofocus id="name" placeholder="Enter phone number">
                    </div>

                <!-- <div class="card-footer"> -->
                  <button type="submit" name="submit" value="Create" class="btn btn-success pull-right">
                  Submit
                <!-- </div> -->

                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          <!-- </div>
          <!-- /.card-body -->

        </div> -->
        <!-- /.card -->
      </div>
    </section>
@endsection
