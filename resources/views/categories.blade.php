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
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/categories_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/categories_responsive.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/single_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/single_responsive.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/responsive.css')}}">


</head>

<body>

<div class="super_container">

	<!-- Header -->

@include('part.header');

	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix" style="height: 1250px;">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="{{ route('home')}}">Home</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Shop</a></li>
					</ul>
				</div>

				<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Product Category</h5>
						</div>
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*" style="width: 183px;">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".teknologi" style="width: 183px;">TEKNOLOGI</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".pertanian" style="width: 183px;">PERTANIAN</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".umum" style="width: 183px;">UMUM</li>
						</ul>
					</div>
				</div>

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Default Sorting</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
											</ul>
										</li>
										<li>
											<span>Show</span>
											<span class="num_sorting_text">6</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>6</span></li>
												<li class="num_sorting_btn"><span>12</span></li>
												<li class="num_sorting_btn"><span>24</span></li>
											</ul>
										</li>
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

								<!-- Product Grid -->

								<div class="product-grid">

									@foreach($products as $product)
									<!-- Product semua -->
									@if($product->category == "Teknologi")
									<div class="product-item teknologi" style="position: absolute;left: 0px;top: 0px; width: 218px;">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="/images/{{$product->photo_product}}" alt="">
											</div>
										
										<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="{{ route('single',$product') }}">{{$product->product_name}}</a></h6>
												<div class="product_price"> Rp {{$product->price}}</div>
											</div>
										</div>
										
										<div class="red_button add_to_cart_button" data-toggle="modal" data-target="#modal-cart{{ $product->id }}" style="width: 218px;">
											<a href="#">add to cart</a>
										</div>
												
										<!-- .modal delete -->
			                        <div class="modal fade" id="modal-cart{{ $product->id }}">
			                            <div class="modal-dialog">
			                                <div class="modal-content">
			                                    <div class="modal-header">
			                                      <h4 class="modal-title">Select Quantity's</h4>
			                                    </div>
			                                    <div class="modal-body">
			                                    <form method="POST" action="{{ route('add', ['id' => $product->id]) }}">
			                                    	<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
														<span>Quantity: </span>

														<input type="number" name = "qnt" id="qnt" class="form-control" value="1" min="1" required>

													</div>
			                                    </div>
			                                    <div class="modal-footer">
			    			                        {{ csrf_field() }}
			                                        {{ method_field('POST') }}
			                                        <button type="submit" class="red_button add_to_cart_button">Add to cart</a></button>
			                                      </form>
			                                    </div>
			                                    </form>
			                                  </div>
			                                  <!-- /.modal-content -->
			                              </div>
			                              <!-- /.modal-dialog -->
			                          </div>
									</div>
								
									
									@elseif($product->category == "Umum")
									<div class="product-item umum" style="position: absolute;left: 0px;top: 0px; width: 218px;">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="/images/{{$product->photo_product}}" alt="">
											</div>
										
										<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">{{$product->product_name}}</a></h6>
												<div class="product_price"> Rp {{$product->price}}</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button" data-toggle="modal" data-target="#modal-cart{{ $product->id }}" style="width: 218px;">
											<a href="#">add to cart</a>
										</div>
										
										
												
										<!-- .modal delete -->
			                          <div class="modal fade" id="modal-cart{{ $product->id }}">
			                            <div class="modal-dialog">
			                                <div class="modal-content">
			                                    <div class="modal-header">
			                                      <h4 class="modal-title">Select Quantity's</h4>
			                                    </div>
			                                    <div class="modal-body">
			                                    <form method="POST" action="{{ route('add', ['id' => $product->id]) }}">
			                                    	<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
														<span>Quantity: </span>

														<input type="number" name = "qnt" id="qnt" class="form-control" value="1" min="1" required>

													</div>
			                                    </div>
			                                    <div class="modal-footer">
			    			                        {{ csrf_field() }}
			                                        {{ method_field('POST') }}
			                                        <button type="submit" class="red_button add_to_cart_button">Add to cart</a></button>
			                                      </form>
			                                    </div>
			                                    </form>
			                                  </div>
			                                  <!-- /.modal-content -->
			                              </div>
			                              <!-- /.modal-dialog -->
			                          </div>
									</div>
								
									@elseif($product->category == "Pertanian")
									<div class="product-item pertanian" style="position: absolute;left: 0px;top: 0px; width: 218px;">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="/images/{{$product->photo_product}}" alt="">
											</div>
										
										<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">{{$product->product_name}}</a></h6>
												<div class="product_price"> Rp {{$product->price}}</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button" data-toggle="modal" data-target="#modal-cart{{ $product->id }}" style="width: 218px;">
											<a href="#">add to cart</a>
										</div>
										
										
												
										<!-- .modal delete -->
			                          <div class="modal fade" id="modal-cart{{ $product->id }}">
			                            <div class="modal-dialog">
			                                <div class="modal-content">
			                                    <div class="modal-header">
			                                      <h4 class="modal-title">Select Quantity's</h4>
			                                    </div>
			                                    <div class="modal-body">
			                                    <form method="POST" action="{{ route('add', ['id' => $product->id]) }}">
			                                    	<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
														<span>Quantity: </span>

														<input type="number" name = "qnt" id="qnt" class="form-control" value="1" min="1" required>

													</div>
			                                    </div>
			                                    <div class="modal-footer">
			    			                        {{ csrf_field() }}
			                                        {{ method_field('POST') }}
			                                        <button type="submit" class="red_button add_to_cart_button">Add to cart</a></button>
			                                      </form>
			                                    </div>
			                                    </form>
			                                  </div>
			                                  <!-- /.modal-content -->
			                              </div>
			                              <!-- /.modal-dialog -->
			                          </div>
									</div>
									@endif
									@endforeach
							</div>
						</div>
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
<script src="{{asset('assets/js/categories_custom.js')}}"></script>
<script src="{{asset('assets/js/single_custom.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>
