<section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Rooms</h2>
          </div>
        </div>    		
    		<div class="row">
                @foreach($value as $key => $data)
        			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
        				<div class="room">
        					<a href="{{route('showroom',$data->id)}}" class="img d-flex justify-content-center align-items-center" style="background-image: url(client/images/room-1.jpg);">
        						<div class="icon d-flex justify-content-center align-items-center">
        							<span class="icon-search2"></span>
        						</div>
        					</a>
        					<div class="text p-3 text-center">
        						<h3 class="mb-3"><a href="rooms.html">{{$data->name}}</a></h3>
        						<p><span class="price mr-2">$120.00</span> <span class="per">{{$data->acreage}}</span></p>
        						<hr>
        						<p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
        					</div>
        				</div>
        			</div>
    			@endforeach
    		</div>
    	</div>
    </section>