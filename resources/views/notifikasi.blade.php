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
	<section class="content">
			<div class="container-fluid">
				<div class="row">
				<div class="col-12">
					<div class="callout callout-info">
					<h1> Notifikasi</h1>
					</div>
			@if (Auth::user()->role_id == 2)
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

									<th>Nama Penjual</th>
									<th>Status pembelian</th>
									</tr>
									</thead>
									<tbody>
									<tr>
									<td>
									Dikirim ke :
									<address>
										<strong> {{ $cart->user['address'] }}</strong><br>
									</address>
									</td>

									<td>
										<div class="single_product">
											<li><img src="/images/{{ $cart->product['photo_product'] }}" style="max-height:50px ; max-weight:50px" ></li>
										</div>
									</td>

									<td>{{ $cart->product['product_name'] }}</td>
									<td>{{$cart->product['description']}}</td>

									<td>{{$cart->qnt}}</td>

									<td>Rp {{$cart->subtotal}}</td>
									<td> {{ $cart->user['name'] }}</td>

									@if ($cart->transaction_status == 1)
												<td> BELUM BAYAR </td>
									@endif
									@if ($cart->transaction_status == 2)
											 <td> BAYAR </td>
									@endif
									@if ($cart->transaction_status == 3)
											<td> SEDANG DIKIRIM </td>
									@endif
									@if ($cart->transaction_status == 4)
											<td> SELESAI </td>
									@endif
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
			@else
			<!--BARANG KE-1-->
			<!-- Main content -->
			@php($trans = \App\Cart::where('id_user','=',\Auth::user()->id)->select('transaction_id','date_insert')->distinct()->get())
			@foreach($trans as $trans_id)
			@php($Date = \Carbon\Carbon::parse($trans_id->date_insert))
			@php($totalDuration = Carbon\Carbon::now()->diffInSeconds($Date))
			@if ($totalDuration < 60)
			<div class="invoice p-3 mb-3">
					<!-- title row -->
					<div class="row">
						<div class="col-12">
						<h4>
							Transaksi  {{ $trans_id->transaction_id }}
							<div class="pull-right">
							@if ($trans_id->status_payment == "0")
                            Status : BELUM DIBAYAR
							@else
							Status : {{ $trans_id->date_insert }}
							Status : {{ Carbon\Carbon::now() }}
							@endif
                            </div>
                        </h4>

						</div>
						<!-- /.col -->
					</div>
					<!-- Table row -->
                    <div class="row">
						<div class="col-12 table-responsive">
						<table class="table table-striped">
                            <!-- bagian atas tabel-->
                            <thead>
							<tr>
                            <th colspan="3">
                                <div class="pull-right">
                                	<a href="{{ route('notifikasi_penjual', ['id' => $trans_id->transaction_id]) }}">
                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;"><i class="fa fa-reply-all"></i>
								    Tampilkan Rincian
							        </button>
							        </a>

                                </div>
                            </th>
							</tr>
                            </thead>

                        </table>
						</div>
						<!-- /.col -->
                    </div>

                    </div>
                @endif
				@endforeach
				@endif
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
