@extends('dashboard')

@section('content')
	<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center" style="margin-top: 0px;">
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
				<form  action="/profile" method="POST">
				<div class="product_details">
					<div class="product_details_title">
                        <h2> Edit Profile</i></h2>
	                        <div class="form-group">
	                            <input type="text"  name = "name" value="{{ $user->name }}" >
	                        </div>
	                        <div class="form-group">
	                            <input type="email" name = "email" value="{{ $user->email }}" >
	                        </div>
	                        <div class="form-group">
	                            <input type="text" name = "no_telp" value="{{$user->no_telp}}" >
	                        </div>
	                        <div class="form-group">
	                            <input type="text" name = "address" value="{{$user->address}}" >
	                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success d-flex flex-row align-items-center justify-content-center"><a href="#">Save</a></button></div> 
                    {{ csrf_field() }}
				</div>
				<input type="hidden" name="_method" value="PUT">
				</form>
			</div>
		</div>

	</div>

@endsection