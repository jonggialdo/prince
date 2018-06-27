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
				</div>
			</div>
			<div class="row">
				<div class="col">
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
						<div class="red_button deal_ofthe_week_button"><a href="{{ route('categories') }}">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Best Sellers</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->

							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<img src="assets/images/product_1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
											<div class="product_price">$520.00<span>$590.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 2 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="assets/images/product_2.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
											<div class="product_price">$610.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 3 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="assets/images/product_3.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
											<div class="product_price">$120.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 4 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product">
										<div class="product_image">
											<img src="assets/images/product_4.png" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
											<div class="product_price">$410.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 5 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women men">
									<div class="product">
										<div class="product_image">
											<img src="assets/images/product_5.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
											<div class="product_price">$180.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 6 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product discount">
										<div class="product_image">
											<img src="assets/images/product_6.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
											<div class="product_price">$520.00<span>$590.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 7 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="assets/images/product_7.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
											<div class="product_price">$610.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 8 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product">
										<div class="product_image">
											<img src="assets/images/product_8.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
											<div class="product_price">$120.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 9 -->

							<div class="owl-item product_slider_item">
								<div class="product-item men">
									<div class="product">
										<div class="product_image">
											<img src="assets/images/product_9.png" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
											<div class="product_price">$410.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 10 -->

							<div class="owl-item product_slider_item">
								<div class="product-item men">
									<div class="product">
										<div class="product_image">
											<img src="assets/images/product_10.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
											<div class="product_price">$180.00</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
