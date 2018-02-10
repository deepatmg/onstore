
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>New Fashions a Flat Ecommerce Bootstarp Responsive Website Template | Single :: w3layouts</title>
<link href="{{url('lib/user/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{url('lib/user/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{url('lib/user/css/star.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('lib/user/css/component.css')}}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
		/>
<script src="{{url('lib/user/js/jquery.min.js')}}"></script>
<script src="{{url('lib/user/js/simpleCart.min.js')}}"> </script>
<!-- start menu -->
<link href="{{url('lib/user/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{url('lib/user/js/megamenu.js')}}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start menu -->
</head>
<body>
<!--header-->
<div class="header2 text-center">
	 <div class="container">
		 <div class="main-header">
			  <div class="carting">
				 <ul><li><a href="login.html"> LOGIN</a></li></ul>
				 </div>
			 <div class="logo">
				 <h3><a href="{{url('/')}}">NEW FASHIONS</a></h3>
			  </div>			  
			 <div class="box_1">				 
				 <a href="cart.html"><h3>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)<img src="{{url('lib/user/images/cart.png')}}" alt=""/></h3></a>
				 <p><a href="javascript:;" class="simpleCart_empty">empty cart</a></p>
			 
			 </div>
			 
			 <div class="clearfix"></div>
		 </div>
				<!-- start header menu -->
		@include('user/header')
		 
	 </div>
</div>
<!--header//-->
<!--Single Page starts Here-->
<div class="product-main">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="{{url('/')}}">Home</a></li>
		  <li class="active">Single</li>
		 </ol>
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
				 <div class="single-page">					 
					 <!--Include the Etalage files-->
						<link rel="stylesheet" href="{{url('lib/user/css/etalage.css')}}">
						<script src="{{url('lib/user/js/jquery.etalage.min.js')}}"></script>
					 <!-- Include the Etalage files -->
					 <script>
							jQuery(document).ready(function($){
					
								$('#etalage').etalage({
									thumb_image_width: 300,
									thumb_image_height: 400,
									source_image_width: 700,
									source_image_height: 800,
									show_hint: true,
									click_callback: function(image_anchor, instance_id){
										alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
									}
								});
								// This is for the dropdown list example:
								$('.dropdownlist').change(function(){
									etalage_show( $(this).find('option:selected').attr('class') );
								});
					
							});
						</script>
						<!--//details-product-slider-->
					 <div class="details-left-slider">
						  <ul id="etalage">
							 <li>
								<a href="optionallink.html">
								<img class="etalage_thumb_image" src="{{url($image0->image)}}" />
								<img class="etalage_source_image" src="{{url($image0->image)}}" />
								</a>
							 </li>
							 @foreach($images as $img)
							 <li>
								<img class="etalage_thumb_image" src="{{url($img->image)}}" />
								<img class="etalage_source_image" src="{{url($img->image)}}"/>
							 </li>
							 @endforeach
							
							 <div class="clearfix"></div>
						 </ul>
					 </div>
					 <form action="{{url('addtocart')}}/{{$product->id}}" method="post">
					 <input type="hidden" name="_token" value="{{csrf_token()}}">
					 <div class="details-left-info">
							<h3>{{$product->productname}}</h3>
								<h4>Product Code: {{$product->productcode}}</h4>
								<fieldset class="rating">
				    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
				    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
				    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
				    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
				    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
				    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
				    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
				    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
				    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
				    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label></fieldset>
<br>
					<p>Rs.{{$product->price}} <a href="#">Click for offer</a></p>
							<p class="qty">Size :: <select name="size"><option value="1">Large</option>
							<option value="2">Medium</option><option value="3">Small</option><option value="4">XL</option></select></p>
							<p class="qty">Qty ::</p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
							<div class="btn_form">
								<button name="submit" type="submit">Add to cart</button>
							</div>
							<div class="flower-type">
							<p>Category  ::<a href="#">{{$product->title}}</a></p>
							<p>Brand  ::<a href="#">{{$product->brand}}</a></p>
							</div>
							<h5>Description  ::</h5>
							<p class="desc">{!!$product->description!!}</p>
					 </div>
					 <div class="clearfix"></div>				 	
				 </div>
			 </div>
		 </div>		 
		 <div class="clearfix"></div>
		 <div class="single-bottom2">
			 <h6>Related Products</h6>
				<div class="rltd-posts">
					 <div class="col-md-3 pst1">
						 <img src="{{url('lib/user/images/ab3.jpg')}}" alt=""/>
						 <h4><a href="products.html">NEWLOOK</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="{{url('lib/user/images/c1.jpg')}}" alt=""/>
						 <h4><a href="products.html">NEWLOOK</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="{{url('lib/user/images/ab4.jpg')}}" alt=""/>
						 <h4><a href="products.html">SAREES</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="{{url('lib/user/images/c5.jpg')}}" alt=""/>
						 <h4><a href="products.html">MANGO</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="clearfix"></div>
				</div>
		 </div>	
	 </div>
</div>
<!--fotter-->
<div class="fotter-logo">
	 <div class="container">
	 <div class="ftr-logo"><h3><a href="index.html">NEW FASHIONS</a></h3></div>
	 <div class="ftr-info">
	 <p>&copy; 2015 All Rights Reseverd Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
	</div>
	 <div class="clearfix"></div>
	 </div>
</div>
<!--fotter//-->

</body>
</html>