@extends('admin.dashboard')

@section('content')
    <!-- content header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Transaction</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Shiping</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="row">
      <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Shiping</h3>

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
                    <th>No</th>
                    <th>Id_Order</th>
                    <th>Nama Pembeli</th>
                    <th>Time Order</th>
                    <th>Status</th>
                    <th>Total</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Linda</td>
                    <td>13.00</td>
                    <td>Lunas</td>
                    <td>Rp 100.000</td>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit">
                            <i class="fa fa-eye nav-icon"></i>
                          </button>
                          <div class="modal fade" id="modal-edit">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Detail</h4>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" role="form" action="#">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH')}}
                                        <input type="hidden" name="model" value="sodung">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="" value="" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="" value="" disabled>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
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
                </tbody>
              </table>
              </div>
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
