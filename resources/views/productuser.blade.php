<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="{{asset('assets/images/logo_web.png')}}"><title>Prince IPB</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/single_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/single_responsive.css')}}">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('assets/admin/dist/css/adminlte.min.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>

<div class="super_container">

	<!-- Header -->

@include('part.header');

	<div class="container single_product_container">
		<div class="row">
			<div class="col">

	<!-- Contentnya -->
	<div class="callout callout-info">
					<h1>My Product</h1>
					</div>

	<section class="content">
			<div class="container-fluid">
				<div class="row">
				<div class="col-12">

			<!--BARANG KE-1-->
			<!-- Main content -->
			<div class="invoice p-3 mb-3">
					<!-- title row -->


					<!-- Table row -->
					<div class="row">
						<div class="col-12 table-responsive">
						<table class="table table-striped">
							<thead>
							<tr>
							<th>Product Name</th>

							<th>Category</th>

							<th>Description</th>

							<th>Price</th>

							<th>Stock</th>

							<th>Purchase</th>

              <th>Viewer</th>

              <th>Nama User</th>

							 <!-- .modal delete -->
							</tr>
							</thead>
              @foreach($products as $product)
              <tbody>
							<tr>

							<td><a href="{{ url('/single/' . $product->id)}}">{{$product->product_name}}</a></td>

							<td>{{$product->category}}</td>

							<td>{{$product->description}}</td>

							<td>{{$product->price}}</td>

							<td>{{$product->stock}}</td>

							<td>{{$product->purchase}}</td>

              <td>{{$product->viewer}}</td>

              <td>{{$product->user['name']}}</td>

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
                              <form  action="/productuser/{{$product->id}}" method="POST">

                                  <div class="form-group">
                                      <label>Stock</label>
                                      <input type="text" name = "stock" class="form-control" placeholder="{{ $product->stock }}" value="{{ $product->stock }}" required>
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
							</tbody>
              @endforeach
						</table>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->

	</section>




				</div>
			</div>
		</div>




@include('part.footer');

</div>

<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/single_custom.js')}}"></script>
<script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/admin/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/admin/dist/js/demo.js')}}"></script>

</body>

</html>
