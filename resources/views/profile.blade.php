@extends('dashboard')

@section('content')
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

@endsection