@extends('layout')
@section('content')     
   <div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to($product_by_details->product_image)}}" alt="" />
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$product_by_details->product_name}}</h2>
								<img src="{{URL::to('frontend/images/product-details/rating.png')}}" alt="" />
								<span>
									<span>Rp.{{$product_by_details->product_price}}</span>
									<form action="{{url('/add-to-cart')}}" method="post">
										{{ csrf_field() }}
										<label>Quantity:</label>
										<input name="qty" type="text" value="1" />
										<input type="hidden" name="product_id" value="{{$product_by_details->product_id}}">
										<button type="submit" class="btn btn-fefault cart">
											<i class="fa fa-shopping-cart"></i>
											Add to cart
										</button>
									</form>
								</span>
								<p><b>Provinsi:</b> {{$product_by_details->manufacture_name}}</p>
								<p><b>Category:</b> {{$product_by_details->category_name}}</p>

							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
						   <p>{{$product_by_details->product_long_description}}</p>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="companyprofile" >
						   <p>{{$product_by_details->manufacture_name}}</p>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="tag" >
						   <p> {{$product_by_details->category_name}}</p>
						</div>
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Iqbal</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>10 Mar 2018</a></li>
									</ul>
									<p>Sangat bagus tidak kotor, pengiriman cepat.</p>
									<p><b>Tulis Komentar</b></p>
									
									<form action="#" >
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="{{URL::to('frontend/images/product-details/rating.png')}}" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							</div>
						</div>
						</div>
					</div>
				</div>
					</div><!--/category-tab-->
					
		
    
   
    
    


@endsection