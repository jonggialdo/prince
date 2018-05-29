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
					<h1> Checkout</h1>
					</div>


					<!-- Main content -->
					<div class="invoice p-3 mb-3">
					<!-- title row -->
					<div class="row">
						<div class="col-12">
						<h4>
							<i class="fa fa-info"></i> Resi Pembelian
							<small class="float-right">Date: 9/05/2018</small>
						</h4>
						</div>
						<!-- /.col -->
					</div>
					<!-- info row -->
					<div class="row invoice-info">
						<div class="col-sm-4 invoice-col">
						From :
						<address>
							<strong>Direktorat Kemahasiswaan IPB Dramaga</strong><br>
							Jl. Dramaga Raya harus bahagia<br>
							Bogor, Jawa Barat 30128<br>
							Phone: (0321) 359590<br>
							Email: ditmawa@apps.ipb.ac.id
						</address>
						</div>
						<!-- /.col -->
						<div class="col-sm-4 invoice-col">
						To :
						<address>
							<strong>Sultan Jonggi Abialdo</strong><br>
							Jl. Abadi jadi sultan ya jong<br>
							Kenangan, Jakarta Timur 30121<br>
							Phone: (021) 359590<br>
							Email: sultan.jonggi@apps.ipb.ac.id
						</address>
						</div>
						<!-- /.col -->
						<div class="col-sm-4 invoice-col">
						<b>Invoice #007612</b><br>
						<br>
						<b>Order ID:</b> 4F3S8J<br>
						<b>Payment Due:</b> 2/22/2014<br>
						<b>Account:</b> 968-34567
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->

					<!-- Table row -->
					<div class="row">
						<div class="col-12 table-responsive">
						<table class="table table-striped">
							<thead>
							<tr>
							<th>No.</th>
							<th>Qty</th>
							<th>Product</th>
							<th>Serial #</th>
							<th>Description</th>
							<th>Subtotal</th>
							</tr>
							</thead>
							<tbody>
							<tr>
							<td>1</td>
							<td>1</td>
							<td>Call of Duty</td>
							<td>455-981-221</td>
							<td>El snort testosterone trophy driving gloves handsome</td>
							<td>Rp 200.000</td>
							</tr>
							<tr>
							<td>2</td>
							<td>1</td>
							<td>Need for Speed IV</td>
							<td>247-925-726</td>
							<td>Wes Anderson umami biodiesel</td>
							<td>Rp 200.000</td>
							</tr>
							<tr>
							<td>3</td>
							<td>1</td>
							<td>Monsters DVD</td>
							<td>735-845-642</td>
							<td>Terry Richardson helvetica tousled street art master</td>
							<td>Rp 200.000</td>
							</tr>
							<tr>
							<td>4</td>
							<td>1</td>
							<td>Grown Ups Blue Ray</td>
							<td>422-568-642</td>
							<td>Tousled lomo letterpress</td>
							<td>Rp 200.000</td>
							</tr>
							</tbody>
						</table>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->

					<div class="row">
						<!-- accepted payments column -->
						<div class="col-6">
						<p class="lead">Payment Methods:</p>
						<img src="{{asset('assets/admin/dist/img/credit/visa.png')}}" alt="Visa">
						<img src="{{asset('assets/admin/dist/img/credit/mastercard.png')}}" alt="Mastercard">
						<img src="{{asset('assets/admin/dist/img/credit/american-express.png')}}" alt="American Express">
						<img src="{{asset('assets/admin/dist/img/credit/paypal2.png')}}" alt="Paypal">

						<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
							Kamu bisa melakukan transaksi dengan metode diatas. Jangan ragu ya, Kami situs terpercaya.
							Jika ragu, hubungi IPB segera dan tanya aja PRINCE IPB abal abal ga? hehe. Silahkan bayar
						</p>
						</div>
						<!-- /.col -->
						<div class="col-6">
						<p class="lead">Amount Due 9/05/2018</p>

						<div class="table-responsive">
							<table class="table">
							<tr>
								<th style="width:50%">Subtotal:</th>
								<td>Rp 800.000</td>
							</tr>
							<tr>
								<th>Tax (10%):</th>
								<td>Rp 80.000</td>
							</tr>
							<tr>
								<th>Shipping:</th>
								<td>Rp 10.000</td>
							</tr>
							<tr>
								<th>Total:</th>
								<td>Rp 890.000</td>
							</tr>
							</table>
						</div>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->

					<!-- this row will not appear when printing -->
					<div class="row no-print">
						<div class="col-12">
							<a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
							<button type="button" class="btn btn-success float-right"><i class="fa fa-credit-card"></i> Submit
							Payment
							</button>
							<button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
							<i class="fa fa-download"></i> Generate PDF
							</button>
						</div>
					</div>
					</div>
					<!-- /.invoice -->
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