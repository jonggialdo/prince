@extends('admin.dashboard')

@section('content')
    <!-- content header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Manage Product</li>
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
                <h3 class="card-title">Product List</h3>

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
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Purchase</th>
                    <th>Viewer</th>
                  </tr>
                  @foreach($products as $product)
                  <tr>
                    <td>{{ $number+=1 }}</td>
                    <th>{{$product->product_name}}</th>
                    <th>{{$product->description}}</th>
                    <th>{{$product->price}}</th>
                    <th>{{$product->stock}}</th>
                    <th>{{$product->purchase}}</th>
                    <th>{{$product->viewer}}</th>
                    <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit{{ $product->id }}" value="{{ $product->id }}">
                            <i class="fa fa-edit nav-icon"></i>
                          </button>
                          <!-- .modal edit -->
                          <div class="modal fade" id="modal-edit{{ $product->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Edit Product</h4>
                                    </div>
                                    <div class="modal-body">
                                    <form  action="/viewproduct/{{$product->id}}" method="POST">
                                        <div class="form-group">
                                            <label>ID User</label>
                                            <input type="text" name = "id_user" class="form-control" placeholder="{{ $product->id_user }}" value="{{ $product->id_user }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Product name</label>
                                            <input type="text" name = "product_name" class="form-control" placeholder="{{ $product->product_name }}" value="{{ $product->product_name }}" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name = "description" required>{{{ $product->description }}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name = "price" class="form-control" placeholder="{{ $product->price }}" value="{{ $product->price }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name = "stock" class="form-control" placeholder="{{ $product->stock }}" value="{{ $product->stock }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Purchase</label>
                                            <input type="text" name = "purchase" class="form-control" placeholder="{{ $product->purchase }}" value="{{ $product->purchase }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Viewer</label>
                                            <input type="text" name = "viewer" class="form-control" placeholder="{{ $product->viewer }}" value="{{ $product->viewer }}" required>
                                        </div>
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
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete{{ $product->id }}" value="{{ $product->id }}">
                            <i class="fa fa-trash nav-icon"></i>
                          </button>
                        <!-- .modal delete -->
                          <div class="modal fade" id="modal-delete{{ $product->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Delete Product</h4>
                                    </div>
                                    <div class="modal-body">
                                    Are you sure want to delete this product?
                                    </div>
                                    <div class="modal-footer">
                                      <form method="POST" action="{{ route('delete.product', $product) }}">
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
              {!! $products->render() !!}
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
