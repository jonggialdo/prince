@extends('admin.dashboard')

@section('content')
    <!-- content header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Manage User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="row">
<<<<<<< HEAD
=======
=======
>>>>>>> 28db9af90f894977f66ae432ef893402dfcebc06
      <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User List</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Manage</th>
                  </tr>
                  @foreach($users as $user)
                  <tr>
                    <td>{{ $number+=1 }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->no_telp }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit{{ $user->id }}" value="{{ $user->id }}">
                            <i class="fa fa-edit nav-icon"></i>
                          </button>
                          <!-- .modal edit -->
                          <div class="modal fade" id="modal-edit{{ $user->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Edit User's Profile</h4>
                                    </div>
                                    <div class="modal-body">
                                    <form  action="/viewuser/{{$user->id}}" method="POST">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name = "email" class="form-control" placeholder="{{ $user->email }}" value="{{ $user->email }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name = "name" class="form-control" placeholder="{{ $user->name }}" value="{{ $user->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name = "address" placeholder="{{ $user->address }}" required>{{{ $user->address }}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" name = "no_telp"placeholder="{{ $user->no_telp }}" value="{{ $user->no_telp }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <div class="form-check">
                                                <input class="form-check-input" name="gender" type="radio" value="Female" {{ $user->gender == 'Female' ? 'checked' : ''}}>
                                                <label class="form-check-label">Female</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="gender" type="radio" value="Male" {{ $user->gender == 'Male' ? 'checked' : ''}}>
                                                <label class="form-check-label">Male</label>
                                            </div> 
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Gender</label>
                                            <input type="text" class="form-control" name = "gender" placeholder="{{ $user->address }}" value="{{ $user->gender }}" required>
                                        </div> -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                    </div>
                                    </form>
                                  </div>
                                  <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                          </div>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete{{ $user->id }}" value="{{ $user->id }}">
                            <i class="fa fa-trash nav-icon"></i>
                          </button>
                          <!-- .modal delete -->
                          <div class="modal fade" id="modal-delete{{ $user->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Delete Account</h4>
                                    </div>
                                    <div class="modal-body">
                                    Are you sure want to delete this account?
                                    </div>
                                    <div class="modal-footer">
                                      <form method="POST" action="{{ route('delete.user', $user) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-danger">Yes</button>
                                      </form>
                                    </div>
                                    </form>
                                  </div>
                                  <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                          </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
              {!! $user->render() !!}
              <!-- /.card-body -->
              <!-- ./card-footer -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
              <!-- ./ card-footer -->
            </div>
            <!-- /.card -->
          </div>
      </div>
      <!-- /.row -->
    </section>
@endsection
