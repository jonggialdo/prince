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
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">User</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Seller</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Customer</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Admin</a></li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                  <table class="table table-hover">
                   <tbody>
                      <tr>
                       <th>No</th>
                       <th>Email</th>
                       <th>Name</th>
                       <th>Address</th>
                       <th>Phone</th>
                       <th>Gender</th>
                       <th>Manage</th>
                      </tr>
                      @foreach($users as $user)
                      @if($user->role_id == 2)
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
                                            <input type="text" name = "email" class="form-control" value="{{ $user->email }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name = "name" class="form-control" value="{{ $user->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name = "address" required>{{{ $user->address }}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" name = "no_telp" value="{{ $user->no_telp }}" required>
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
                                    <div class="callout callout-danger">
                                      <p>
                                        {{ $user->email }}<br>
                                        {{ $user->name }}<br>
                                        {{ $user->no_telp }}<br>
                                        {{ $user->address }}<br>
                                        {{ $user->gender }}
                                      </p>
                                    </div>
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
                   @endif
                   @endforeach
                   </tbody>
                  </table>
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="{{ $users->previousPageUrl() }}">«</a></li>
                      <li class="page-item"><a class="page-link" href="{{ $users->currentPage() }}">{{ $users->currentPage() }}</a></li>
                      <li class="page-item"><a class="page-link" href="{{ $users->nextPageUrl() }}">»</a></li>
                    </ul>
                  </div>
                  <!-- ./ card-footer -->
                </div>
                <div class="tab-pane" id="tab_2">
                  <table class="table table-hover">
                   <tbody>
                      <tr>
                       <th>No</th>
                       <th>Email</th>
                       <th>Name</th>
                       <th>Address</th>
                       <th>Phone</th>
                       <th>Gender</th>
                       <th>Manage</th>
                      </tr>
                      @foreach($users as $user)
                      @if($user->role_id != 1)
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
                                            <input type="text" name = "email" class="form-control" value="{{ $user->email }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name = "name" class="form-control" value="{{ $user->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name = "address" required>{{{ $user->address }}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" name = "no_telp" value="{{ $user->no_telp }}" required>
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
                                    <div class="callout callout-danger">
                                      <p>
                                        {{ $user->email }}<br>
                                        {{ $user->name }}<br>
                                        {{ $user->no_telp }}<br>
                                        {{ $user->address }}<br>
                                        {{ $user->gender }}
                                      </p>
                                    </div>
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
                   @endif
                   @endforeach
                   </tbody>
                  </table>
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="{{ $users->previousPageUrl() }}">«</a></li>
                      <li class="page-item"><a class="page-link" href="{{ $users->currentPage() }}">{{ $users->currentPage() }}</a></li>
                      <li class="page-item"><a class="page-link" href="{{ $users->nextPageUrl() }}">»</a></li>
                    </ul>
                  </div>
                  <!-- ./ card-footer -->
                </div>

                <div class="tab-pane" id="tab_3">
                  <table class="table table-hover">
                   <tbody>
                      <tr>
                       <th>No</th>
                       <th>Email</th>
                       <th>Name</th>
                       <th>Address</th>
                       <th>Phone</th>
                       <th>Gender</th>
                       <th>Manage</th>
                      </tr>
                      @foreach($users as $user)
                      @if($user->role_id == 1)
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
                                            <input type="text" name = "email" class="form-control" value="{{ $user->email }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name = "name" class="form-control" value="{{ $user->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name = "address" required>{{{ $user->address }}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" name = "no_telp" value="{{ $user->no_telp }}" required>
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
                                    <div class="callout callout-danger">
                                      <p>
                                        {{ $user->email }}<br>
                                        {{ $user->name }}<br>
                                        {{ $user->no_telp }}<br>
                                        {{ $user->address }}<br>
                                        {{ $user->gender }}
                                      </p>
                                    </div>
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
                   @endif
                   @endforeach
                   </tbody>
                  </table>
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="{{ $users->previousPageUrl() }}">«</a></li>
                      <li class="page-item"><a class="page-link" href="{{ $users->currentPage() }}">{{ $users->currentPage() }}</a></li>
                      <li class="page-item"><a class="page-link" href="{{ $users->nextPageUrl() }}">»</a></li>
                    </ul>
                  </div>
                  <!-- ./ card-footer -->
                </div>

              </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.card -->
          </div>
      </div>
      <!-- /.row -->
          <!-- /.col -->
        </div>

    </section>
@endsection
