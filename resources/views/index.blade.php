@extends('dashboard')

@section('content')
	<!-- Slider -->
	<div class="main_slider" style="background-image:url(assets/images/slider_2.png)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h5>Selamat Datang di website</h5>
						<h1>Product and Innovation Center</h1>
						<h5>Civitas <span> Institut Pertanian Bogor </span></h5>
						<div class="red_button shop_now_button"><a href="{{ route('categories') }}">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(assets/images/hand_KIRI.jpg)">
						<div class="banner_category">
							<a href="{{ route('categories') }}">TEKNOLOGI</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(assets/images/hand_tengah.jpg)">
						<div class="banner_category">
							<a href="{{ route('categories') }}">PERTANIAN</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(assets/images/hand_kanan.jpg)">
						<div class="banner_category">
							<a href="{{ route('categories') }}">UMUM</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>The Product</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".teknologi">TEKNOLOGI</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".pertanian">PERTANIAN</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".umum">UMUM</li>
						</ul>
					</div>
					<!-- UNTUK RENDER PAGE -->
					<div class="product_sorting_container product_sorting_container_top">
						<div class="pages d-flex flex-row align-items-center">
									@if( $products->currentPage() > 1)
										<div id="next_page" class="page_next" style="margin-right:31px">
											<a href="{{ $products->previousPageUrl() }}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
										</div>
									@endif
										<div class="page_current">
											<span>{{ $products->currentPage() }}</span>
											<ul class="page_selection">
												<li><a href="{{ $products->url(1) }}">1</a></li>
												@if( $products->total() > 8)
												<li><a href="{{ $products->url(2) }}">2</a></li>
												@elseif( $products->total() > 16 )
												<li><a href="{{ $products->url(3) }}">3</a></li>
												@endif
											</ul>
										</div>
										<div class="page_total"><span>of</span> {{ $products->lastPage() }}</div>
										<div id="next_page" class="page_next">
											<a href="{{ $products->nextPageUrl() }}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div>
						</div>
					</div>
					<!--  -->
				</div>
			</div>			
			
			
			<div class="row">
				<div class="col" style="height: 850px;">
					
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<div class="product-grid" style="position: relative; height: 760px;">

									@foreach($products as $product)
									<!-- Product semua -->
									@if($product->category == "Teknologi")
									<div class="product-item teknologi" style="position: absolute;left: 0px;top: 0px; width: 218px;">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="/images/{{$product->photo_product}}" alt="">
											</div>
											@include('product-item');
										
			                          	</div>
									</div>
								
									
									@elseif($product->category == "Umum")
									<div class="product-item umum" style="position: absolute;left: 0px;top: 0px; width: 218px;">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="/images/{{$product->photo_product}}" alt="">
											</div>
											@include('product-item');
			                          </div>
									</div>
								
									@elseif($product->category == "Pertanian")
									<div class="product-item pertanian" style="position: absolute;left: 0px;top: 0px; width: 218px;">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="/images/{{$product->photo_product}}" alt="">
											</div>
										
											@include('product-item');
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

	<!-- Deal of the week -->

	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="assets/images/deal_ofthe_week_2.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Deal Of The Week</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">Day</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button" style="width: 100px;"><a href="{{ route('categories') }}">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

@endsection
