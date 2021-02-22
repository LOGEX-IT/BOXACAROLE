@extends('layout')
@section('layout_content')
<div class="page-head_agile_info_w3l">
		<div class="container">
			

			@if(session('success')){
				<div class="alert alert-success">
				{{ session('success') }}
				</div>
			}
			@endif
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<!-- <div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i>|</i></li>
								<li>Single Page</li>
							</ul>
						 </div> -->
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	<!---728x90--->

	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					
					<ul class="slides">
						<li data-thumb="images/d2.jpg">
							<div class="thumb-image"> <img style="width: 300px; height: 300px;" src="{{URL::to($product_by_details->image)}}" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3 style="color: red;">{{$product_by_details->title}}</h3>
					<p><span class="item_price"><strong>Marque:</strong> {{$product_by_details->marque}}</span>
					<p><span class="item_price"><strong>Matière de fabrication:</strong> {{$product_by_details->matiere_fabrication}}</span>
					<p><span class="item_price"><strong>Origine:</strong> {{$product_by_details->origine}}</span>
					<p><span class="item_price"><strong>Garantie éventuelle:</strong> {{$product_by_details->garantie_eventuelle}}</span>

					<p><span class="item_price"><strong>Prix:</strong>{{$product_by_details->price}} F CFA</span></p>
			
				<form action="{{ route('cart.store') }}" method="post">
				@csrf
					<label>Quantite</label>
					<input type="text" readonly="true" name="" value="1">
					<input type="hidden" id="id" style="width:30px;" name="id" value="{{ $product_by_details->id }}">
					
					
					
					<div class="occasion-cart">
						<br><br>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															
																<fieldset>
																	<input type="submit" name="" value="Ajouter au panier" class="button">
																</fieldset>
															
						</div>
																			
					</div>
					</form>
		      </div>

		      <?php
// $product_footer_by_category2 = DB::table('products')
//   ->join('categories', 'products.categorie_id','=', 'categories.id')
//   ->select('products.*','categories.name')
//   ->where('categories.id',$catid)
//   ->where('products.status','6')
//   ->limit(4)
//   ->get();

		       ?>
	 			<div class="clearfix"> </div>
		
<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Arrivées  <span> vedette</span></h3>	
					 <!--  <div class="col-md-3 product-men single" sty>
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="{{URL::to('template/images/w2.jpg')}}" alt="" class="pro-image-front">
										<img src="{{URL::to('template/images/w2.jpg')}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Voir le produit</a>
												</div>
											</div>
											<span class="product-new-top">Nouveau</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Sleeveless Solid Blue Top</a></h4>
										<div class="info-product-price">
											<span class="item_price">68000 FCFA</span>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Sleeveless Solid Blue Top">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="button" name=""
																	 value="Voir le produit" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
					 </div> -->
                     <!--  <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="{{URL::to('template/images/w4.jpg')}}" alt="" class="pro-image-front">
										<img src="{{URL::to('template/images/w4.jpg')}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Voir le produit</a>
												</div>
											</div>
											<span class="product-new-top">Nouveau</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Black Basic Shorts</a></h4>
										<div class="info-product-price">
											<span class="item_price">75000 FCFA</span>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Black Basic Shorts">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="button" name="" value="Voir le produit" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
					 </div> -->
				     <!--  <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="{{URL::to('template/images/s6.jpg')}}" alt="" class="pro-image-front">
										<img src="{{URL::to('template/images/s6.jpg')}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Voir le produit</a>
												</div>
											</div>
											<span class="product-new-top">Nouveau</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Aero Canvas Loafers  </a></h4>
										<div class="info-product-price">
											<span class="item_price">89300 FCFA</span>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Aero Canvas Loafers">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="button" name="" value="Voir le produit" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
					 </div> -->


                							<div class="clearfix"> </div>
					<!--//slider_owl-->
              </div>
	     </div>
 </div>

   <?php		
		  foreach($product_footer_by_category2 as $v_product_footer_by_category){?>
					 <div class="col-md-3 product-men single" style="margin-bottom: 30px;" >
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img style="height: 100%; width: 100%;"  src="{{URL::to($v_product_footer_by_category->image)}}" alt="" class="pro-image-front">
										<img style="height: 100%; width: 100%;" src="{{URL::to($v_product_footer_by_category->image)}}" alt="" class="pro-image-back">
											<!-- <div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Voir le produit</a>
												</div>
											</div> -->
											<span class="product-new-top">Nouveau</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$v_product_footer_by_category->title}}</a></h4>
										<div class="info-product-price">
											<span class="item_price">{{$v_product_footer_by_category->price}}</span>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Ankle Length Socks">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input  onclick="location.href='{{URL::to('/detail_produit/'.$v_product_footer_by_category->id)}}'"; type="button" name="" value="Voir le produit" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
					 </div>
		 <?php }?><br>
<!--//single_page-->
<!---728x90--->
<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>LIVRAISON GRATUITE</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>ASSISTANCE 24/7</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>GARANTIE DE REMBOURSEMENT</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>BONS CADEAUX GRATUITS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
@endsection