@extends('client.layouts.main')
@section('title','Home Page')
@section('content')
<!--Header menu-->
@include("client.shared.menu")
<!-- END Header Menu -->
<!--Header room-->
@include("client.shared.headerroom")
<!-- END Header room -->
<!--roomsingle-->
<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-md-12 ftco-animate">
						<h2 class="mb-4">{{$data->room_type->name}}</h2>
						<div class="single-slider owl-carousel">
							<div class="item">
								<div class="room-img" style="background-image: url(client/images/room-1.jpg);"></div>
							</div>
							<div class="item">
								<div class="room-img" style="background-image: url(client/images/room-2.jpg);"></div>
							</div>
							<div class="item">
								<div class="room-img" style="background-image: url(client/images/room-3.jpg);"></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
						<p>{{$data->description}}</p>
						<div class="d-md-flex mt-5 mb-5">
							<ul class="list">
								<li><span>Range Adult: </span> {{$data->room_type->range_adult}}</li>
								<li><span>Range Kid: </span>{{$data->room_type->range_kid}}</li>
							</ul>
							<ul class="list ml-md-5">
								<li><span>Acreage: </span>{{$data->acreage}}</li>
								<li><span>Bed: </span> {{$data->room_type->bed}}</li>
							</ul>
						</div>
						<div class="tagcloud">
							<p>Service</p>
							@foreach ($data->service as $data) 
							<a href="#" class="tag-cloud-link">{{$data->name}}</a>
							@endforeach
						</div>

					</div>
          		<!-- <div class="col-md-12 room-single ftco-animate mb-5 mt-4">
          			<h3 class="mb-4">Take A Tour</h3>
          			<div class="block-16">
		              <figure>
		                <img src="images/room-4.jpg" alt="Image placeholder" class="img-fluid">
		                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
		              </figure>
		            </div>
		        </div> -->

		        <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
		        	<h4 class="mb-4">Review &amp; Ratings</h4>
		        	<div class="row">
		        		<div class="col-md-6">
		        			<form method="post" class="star-rating">
		        				<div class="form-check">
		        					<input type="checkbox" class="form-check-input" id="exampleCheck1">
		        					<label class="form-check-label" for="exampleCheck1">
		        						<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
		        					</label>
		        				</div>
		        			</form>
		        		</div>
		        	</div>
		        </div>
		        <div class="col-md-12 room-single ftco-animate mb-5 mt-5">
		        	<h4 class="mb-4">Available Room</h4>
		        	<div class="row">
		        		<div class="col-sm col-md-6 ftco-animate">
		        			<div class="room">
		        				<a href="rooms.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(client/images/room-1.jpg);">
		        					<div class="icon d-flex justify-content-center align-items-center">
		        						<span class="icon-search2"></span>
		        					</div>
		        				</a>
		        				<div class="text p-3 text-center">
		        					<h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
		        					<p><span class="price mr-2">$120.00</span> <span class="per">per night</span></p>
		        					<hr>
		        					<p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="col-sm col-md-6 ftco-animate">
		        			<div class="room">
		        				<a href="rooms.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(client/images/room-2.jpg);">
		        					<div class="icon d-flex justify-content-center align-items-center">
		        						<span class="icon-search2"></span>
		        					</div>
		        				</a>
		        				<div class="text p-3 text-center">
		        					<h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
		        					<p><span class="price mr-2">$20.00</span> <span class="per">per night</span></p>
		        					<hr>
		        					<p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
		        				</div>
		        			</div>
		        		</div>
		        	</div>
		        </div>

		    </div>
		</div> <!-- .col-md-8 -->
		<div class="col-lg-4 sidebar ftco-animate">
			<div class="sidebar-box">
				Booking
			</div>
			<div class="sidebar-box ftco-animate">
				<div class="categories">
					<h3>Categories</h3>
					@foreach ($data_roomtype as $key => $r)
						<li><a href="#">{{$r->name}} <span></span></a></li>
					@endforeach
				</div>
			</div>

			<div class="sidebar-box ftco-animate">
				<h3>News</h3>
				<div class="block-21 mb-4 d-flex">
					<a class="blog-img mr-4" style="background-image: url(client/images/image_1.jpg);"></a>
					<div class="text">
						<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						<div class="meta">
							<div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
							<div><a href="#"><span class="icon-person"></span> Admin</a></div>
							<div><a href="#"><span class="icon-chat"></span> 19</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="sidebar-box ftco-animate">
				<h3>Tag Cloud</h3>
				<div class="tagcloud">
					@foreach ($value->tag as $value)
					<a href="#" class="tag-cloud-link">{{$value->name}}</a> 
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
</section> <!-- .section -->
<!--End roomsingle-->
<!--footer-->
@include("client.shared.footer")
<!--End Footer-->
@endsection
@section('script1')
@include('client.shared.scriptclient')
@endsection
