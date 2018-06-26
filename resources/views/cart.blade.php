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
					<h1> Cart</h1>
					</div>
	@foreach($carts as $cart)
	<section class="content">
			<div class="container-fluid">
				<div class="row">
				<div class="col-12">
					
			<!--BARANG KE-1-->				
			<!-- Main content -->
			<div class="invoice p-3 mb-3">
					<!-- title row -->
					<div class="row">
						<div class="col-12">
						<h4>
							<small class="fa fa-share-square-o"></small> Produk karya : {{ $cart->buyer['name'] }}
						</h4>
						</div>
						<!-- /.col -->
					</div>
					
					<!-- Table row -->
					<div class="row">
						<div class="col-12 table-responsive">
						<table class="table table-striped">
							<thead>
							<tr>
							<th>Alamat Pengiriman</th>

							<th>Preview</th>
							
							<th>Product name</th>

							<th>Quantity</th>
							
							<th>Description</th>
							
							<th>Subtotal</th>
							<th>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete{{ $cart->id }}" value="{{ $cart->id }}">
                            <i class="fa fa-trash nav-icon"></i>
                          </button>
							 <!-- .modal delete -->
                          <div class="modal fade" id="modal-delete{{ $cart->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Delete Product</h4>
                                    </div>
                                    <div class="modal-body">
                                    Are you sure want to delete this product?
                                    </div>
                                    <div class="modal-footer">
                                      <form method="POST" action="{{ route('delete.cart', $cart) }}">
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
                          </th>
							</tr>
							</thead>
							<tbody>
							<tr>
							<td>
							Dikirim ke :
							<address>
								<strong> {{ $cart->buyer['address'] }}</strong><br>
							</address>
							</td>
							
							<td>
								<div class="single_product">
									<li><img src="/images/{{ $cart->product['photo_product'] }}" style="max-height:50px ; max-weight:50px" ></li>	
								</div>
							</td>
							
							<td>{{ $cart->product['product_name'] }}</td>
							
							<td>
								{{$cart ->qnt}}
							</td>
														
							<td>{{$cart->product['description']}}</td>
							
							<td>Rp {{$cart->subtotal}}</td>
							<td></td>
							</tr>
							</tbody>
						</table>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
			
	</section>
	@endforeach
					
					<div class="row no-print">
						<div class="col-12">
							<a href =" {{ route('checkout') }}">
							<button type="button" class="btn btn-success float-right"><i class="fa fa-credit-card"></i> 
								Lakukan Checkout
							</button>
							</a>
							<a href =" {{ route('categories') }}">
							<button type="button" class="btn btn-primary float-right" style="margin-right: 5px;"><i class="fa fa-reply-all"></i> 
								Pilih Produk Lainnya
							</button>
							</a>
							<td>Total :  {{ $total }}</td>
						</div>

					</div>


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
