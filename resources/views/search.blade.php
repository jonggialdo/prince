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
			<div class="col product_section clearfix">

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
							<div class="col"style="height: 380px;">
								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										@if( $datas->currentPage() > 1)
										<div id="next_page" class="page_next" style="margin-right:31px">
											<a href="{{ $datas->previousPageUrl() }}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
										</div>
										@endif
										<div class="page_current">
											<span>{{ $datas->currentPage() }}</span>
											<ul class="page_selection">
												<li><a href="{{ $datas->url(1) }}">1</a></li>
												@if( $datas->total() > 8)
												<li><a href="{{ $datas->url(2) }}">2</a></li>
												@elseif( $datas->total() > 16 )
												<li><a href="{{ $datas->url(3) }}">3</a></li>
												@endif
											</ul>
										</div>
										<div class="page_total"><span>of</span> {{ $datas->lastPage() }}</div>
										<div id="next_page" class="page_next">
											<a href="{{ $datas->nextPageUrl() }}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>

								</div>

								<!-- Product Grid -->

								<div class="product-grid">

									@foreach($datas as $data)
									<!-- Product semua -->
									@if($data->category == "Teknologi")
									<div class="product-item teknologi" style="position: absolute;left: 0px;top: 0px; width: 218px;">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="/images/{{$data->photo_product}}" alt="">
											</div>

										<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="/single/{{$data->id}}">{{$data->product_name}}</a></h6>
												<div class="product_price"> Rp {{$data->price}}</div>
											</div>
										</div>

										<div class="red_button add_to_cart_button" data-toggle="modal" data-target="#modal-cart{{ $data->id }}" style="width: 218px;">
											<a href="#">add to cart</a>
										</div>

										<!-- .modal delete -->
			                        <div class="modal fade" id="modal-cart{{ $data->id }}">
			                            <div class="modal-dialog">
			                                <div class="modal-content">
			                                    <div class="modal-header">
			                                      <h4 class="modal-title">Select Quantity's</h4>
			                                    </div>
			                                    <div class="modal-body">
			                                    <form method="POST" action="{{ route('add', ['id' => $data->id]) }}">
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


									@elseif($data->category == "Umum")
									<div class="product-item umum" style="position: absolute;left: 0px;top: 0px; width: 218px;">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="/images/{{$data->photo_product}}" alt="">
											</div>

										<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="/single/{{$data->id}}">{{$data->product_name}}</a></h6>
												<div class="product_price"> Rp {{$data->price}}</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button" data-toggle="modal" data-target="#modal-cart{{ $data->id }}" style="width: 218px;">
											<a href="#">add to cart</a>
										</div>

										<!-- .modal delete -->
			                          <div class="modal fade" id="modal-cart{{ $data->id }}">
			                            <div class="modal-dialog">
			                                <div class="modal-content">
			                                    <div class="modal-header">
			                                      <h4 class="modal-title">Select Quantity's</h4>
			                                    </div>
			                                    <div class="modal-body">
			                                    <form method="POST" action="{{ route('add', ['id' => $data->id]) }}">
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

									@elseif($data->category == "Pertanian")
									<div class="product-item pertanian" style="position: absolute;left: 0px;top: 0px; width: 218px;">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="/images/{{$data->photo_product}}" alt="">
											</div>

										<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="/single/{{$data->id}}">{{$data->product_name}}</a></h6>
												<div class="product_price"> Rp {{$data->price}}</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button" data-toggle="modal" data-target="#modal-cart{{ $data->id }}" style="width: 218px;">
											<a href="#">add to cart</a>
										</div>



										<!-- .modal delete -->
			                          <div class="modal fade" id="modal-cart{{ $data->id }}">
			                            <div class="modal-dialog">
			                                <div class="modal-content">
			                                    <div class="modal-header">
			                                      <h4 class="modal-title">Select Quantity's</h4>
			                                    </div>
			                                    <div class="modal-body">
			                                    <form method="POST" action="{{ route('add', ['id' => $data->id]) }}">
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
