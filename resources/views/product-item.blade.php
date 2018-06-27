<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="{{ route('single',$product) }}">{{$product->product_name}}</a></h6>
												<div class="product_price"> Rp {{$product->price}}</div>
											</div>
										</div>
										@if( $product->stock != 0 )
										<div class="red_button add_to_cart_button" data-toggle="modal" data-target="#modal-cart{{ $product->id }}" style="width: 218px;">
											<a href="#">add to cart</a>
										</div>
										@else
										<div class="red_button add_to_cart_button" style="width: 218px; background: #000000;">
											<a href="#">SOLD OUT</a>
										</div>
										@endif	
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

														<input type="number" name = "qnt" id="qnt" class="form-control" value="1" min ="1" max="{{$product->stock }}" required>

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