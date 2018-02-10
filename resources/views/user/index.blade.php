
@include('user/header')
		  
		 <div class="caption">
		 <h1>FASHION AND CREATIVITY</h1>	 
		 <p>Sed dapibus est a lorem dictum, id dignissim lacus fermentum. Nulla ut nibh in libero maximus pretium
		 Nunc vulputate vel tellus ac elementum. Duis nec tincidunt dolor, ac dictum eros.</p>
	     </div>
</div>
</div>
<!--header-->
<div class="categoires">
	 <div class="container">
		 <a href="#"><div class="col-md-4 sections fashion-grid-a">
			 <h4>Fashion</h4>
			 <p>dignissim</p>			 					
		 </div></a>
		 <a href="#"><div class="col-md-4 sections fashion-grid-b">
			 <h4>Beauty</h4>
			 <p>fermentum</p>			 					
		 </div></a>
		 <a href="#"><div class="col-md-4 sections fashion-grid-c">
			 <h4>Creativity</h4>
			 <p>vulputate</p>				
		 </div></a>
	 </div>
</div>
<!---->
<div class="features" id="features">
	 <div class="container">
		 <div class="tabs-box">
			<ul class="tabs-menu">
				<li><a href="#tab1">Best seller</a></li>
				<li><a href="#tab2">Popular</a></li>
				<li><a href="#tab3">New Arrivals</a></li>
			</ul>
			<div class="clearfix"> </div>
		 <div class="tab-grids">
			 <div id="tab1" class="tab-grid1">			  
			 @foreach($bestsel as $row)
				 <a href="{{url('single')}}/{{$row->id}}"><div class="product-grid">
						<div class="more-product-info"><span>NEW</span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="{{url($row->image)}}" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>{{$row->productname}}</h4>
								<span class="item_price">Rs.{{$row->price}}</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					 </div>

					@endforeach 
					</div>				  
				<div class="clearfix"></div>
			 </div>				
				
			 <div id="tab2" class="tab-grid2">
			  @foreach($popular as $row)
				 <a href="{{url('single')}}/{{$row->id}}"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="{{url($row->image)}}" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>{{$row->productname}}</h4>
								<span class="item_price">Rs.{{$row->price}}</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					 </div>
					@endforeach
				 
					
					</div>
					<div class="clearfix"></div>
			 </div>
		 
			 <div id="tab3" class="tab-grid3">
			 @foreach($result as $row)
				 <a href="{{url('single')}}/{{$row->id}}"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="{{url($row->image)}}" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>{{$row->productname}}</h4>
								<span class="item_price">Rs.{{$row->price}}</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					 </div>
					@endforeach
				  
				   <div class="clearfix"></div>					
			 </div>
		 </div>				
		 </div>
			<!-- tabs-box -->
			<!-- Comman-js-files -->
			<script>
			$(document).ready(function() {
				$("#tab2").hide();
				$("#tab3").hide();
				$(".tabs-menu a").click(function(event){
					event.preventDefault();
					var tab=$(this).attr("href");
					$(".tab-grid1,.tab-grid2,.tab-grid3").not(tab).css("display","none");
					$(tab).fadeIn("slow");
				});
				$("ul.tabs-menu li a").click(function(){
					$(this).parent().addClass("active a");
					$(this).parent().siblings().removeClass("active a");
				});
			});
			</script>
			<!-- Comman-js-files -->
	 </div>
</div>
<!--fotter-->
@include('user/footer')