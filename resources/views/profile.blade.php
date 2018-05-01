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
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/profile_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/profile_responsive.css')}}">
</head>

<body>

<div class="super_container">

	<!-- Header -->

@include('part.header');

	<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="#">Profile</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Edit Profile</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(assets/images/single_2.jpg)"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
                        <h2> Edit Profile</i></h2>
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Rio Al Rasyid" >
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="rioalrasyid97@gmail.com" >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="081354639063" >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Dramaga, Bogor, Jabar, Indonesia" >
                        </div>
                    </div>
                  
                    <div class="red_button d-flex flex-row align-items-center justify-content-center"><a href="#">Save</a></div>
                    
                    
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
</body>

</html>
