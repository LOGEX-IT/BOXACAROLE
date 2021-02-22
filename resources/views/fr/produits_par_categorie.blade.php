@extends('layout')
@section('layout_content')

<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="{{URL::to('template/images/log_pic.jpg')}}" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="{{URL::to('template/images/log_pic.jpg')}}" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   
						 </div>
				</div>
	</div>
</div>

	<div class="banner-bootom-w3-agileits">
	<div class="container">
		<div class="col-md-4 products-left">

				<ul class="tree-list-pad">
		 <?php
             $all_published_category_menu=DB::table('categories')
                               ->where('status',1)
                               ->get();
                
             $all_published_category_menu_accessoire=DB::table('categories')
                               ->where('status',2)
                               ->first();
         ?>  
			
            <div class="community-poll">
				<h4>CATEGORIES</h4>
				<div class="swit form">	
					<form>
		<?php foreach($all_published_category_menu as $ev_all_published_menu_category){?>
					<div class="check_box"> 
						<div class="radio"> <label><input onclick="location.href='{{URL::to('/product_by_category/'.Crypt::encrypt($ev_all_published_menu_category->id))}}'"; type="radio" id="tout_id" name="radio"><i></i>{{$ev_all_published_menu_category->name}}</label> 
						</div>
				    </div>
	    <?php }?>

	                <div class="check_box"> 
	         	        <div class="radio"> <label><input onclick="location.href='{{URL::to('/product_by_category/'.Crypt::encrypt($all_published_category_menu_accessoire->id))}}'"; type="radio" name="radio">
	         	        	<i></i>{{$all_published_category_menu_accessoire->name}}</label> 
	         	        </div>
	         	    </div>
					</form>
				</div>
			</div>



			<div class="community-poll">
				<h4>STYLES</h4>
				<div class="swit form">	
					<form>
					<!-- <div class="check_box"><div class="radio"> <label><input type="radio" id="tout_id" name="radio" ><i></i>Tout</label> </div></div> -->
					<div class="check_box"> <div class="radio"> <label><input type="radio" id="homme_id" name="radio" ><i></i>Hommes</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" id="dame_id" name="radio"><i></i>Dames</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" id="enfant_id" name="radio"><i></i>Enfants</label> </div></div>
					<!-- <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Dames/Hommes</label> </div></div> -->
					</form>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<span style="font-style: bold; font-size: 20px;">Les produits de catégorie <strong style="font-size: 25px; font-style: bold; color: #fc636b;"><< {{$categorie->name}}>> <b></b></strong> </span>
				<div class="clearfix"></div>
		</div>

		
  <div class="row" id="tout_produit_id" style="display: block;">
			<?php
      foreach($product_by_category as $v_product){?>
					  <div class="col-md-3 product-mene single" style="margin-top: 20px;">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img style="height: 200px; width: 250px;"  src="{{URL::to($v_product->image)}}" alt="" class="pro-image-front">
										<img style="height: 200px; width: 250px;" src="{{URL::to($v_product->image)}}" alt="" class="pro-image-back">
											<!-- <div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Voir le produit</a>
												</div>
											</div> -->
											<span class="product-new-top">Nouveau</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="#">{{$v_product->title}}</a></h4>
										<div class="info-product-price">
											<span class="item_price">{{$v_product->price}} F CFA</span>
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
																	<input type="button" onclick="location.href='{{URL::to('/detail_produit/'.Crypt::encrypt($v_product->id)}}'";  name=""
																	 value="Voir le produit" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
					</div>
    <?php }?>

 </div>

   <div class="row" id="produit_femme" style="display: none;">
    	@if(count($womens_product_by_category)<1)
          <p style="text-align: center; font-size: 20px; color: red; font-style: bold; margin-top: 100px;"> PAS DE PRODUIT DISPONIBLE</p>
		@endif
		
			<?php
      foreach($womens_product_by_category as $v_product){?>
					  <div class="col-md-3 product-mene single" style="margin-top: 20px;">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img style="height: 200px; width: 250px;"  src="{{URL::to($v_product->image)}}" alt="" class="pro-image-front">
										<img style="height: 200px; width: 250px;" src="{{URL::to($v_product->image)}}" alt="" class="pro-image-back">
											<!-- <div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Voir le produit</a>
												</div>
											</div> -->
											<span class="product-new-top">Nouveau</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="#">{{$v_product->title}}</a></h4>
										<div class="info-product-price">
											<span class="item_price">{{$v_product->price}} F CFA</span>
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
																	<input type="button" onclick="location.href='{{URL::to('/detail_produit/'.Crypt::encrypt($v_product->id)}}'";  name=""
																	 value="Voir le produit" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
					</div>
    <?php }?>

 </div>

    <div class="row" id="produit_homme" style="display: none;">
    	@if(count($mens_product_by_category)<1)
          <p style="text-align: center; font-size: 20px; color: red; font-style: bold; margin-top: 100px;"> PAS DE PRODUIT DISPONIBLE</p>
		@endif
			<?php
      foreach($mens_product_by_category as $v_product){?>
					  <div class="col-md-3 product-mene single" style="margin-top: 20px;">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img style="height: 200px; width: 250px;"  src="{{URL::to($v_product->image)}}" alt="" class="pro-image-front">
										<img style="height: 200px; width: 250px;" src="{{URL::to($v_product->image)}}" alt="" class="pro-image-back">
											<!-- <div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Voir le produit</a>
												</div>
											</div> -->
											<span class="product-new-top">Nouveau</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="#">{{$v_product->title}}</a></h4>
										<div class="info-product-price">
											<span class="item_price">{{$v_product->price}} F CFA</span>
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
																	<input type="button" onclick="location.href='{{URL::to('/detail_produit/'.Crypt::encrypt($v_product->id)}}'";  name=""
																	 value="Voir le produit" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
					</div>
    <?php }?>

   </div>

       <div class="row" id="produit_enfant" style="display: none;">
			@if(count($children_product_by_category)<1)
          <p style="text-align: center; font-size: 20px; color: red; font-style: bold; margin-top: 100px;"> PAS DE PRODUIT DISPONIBLE</p>
			@endif
			<?php
			
      foreach($children_product_by_category as $v_product){?>
					  <div class="col-md-3 product-mene single" style="margin-top: 20px;">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img style="height: 200px; width: 250px;"  src="{{URL::to($v_product->image)}}" alt="" class="pro-image-front">
										<img style="height: 200px; width: 250px;" src="{{URL::to($v_product->image)}}" alt="" class="pro-image-back">
											<!-- <div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Voir le produit</a>
												</div>
											</div> -->
											<span class="product-new-top">Nouveau</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="#">{{$v_product->title}}</a></h4>
										<div class="info-product-price">
											<span class="item_price">{{$v_product->price}} F CFA</span>
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
																	<input type="button" onclick="location.href='{{URL::to('/detail_produit/'.Crypt::encrypt($v_product->id)}}'";  name=""
																	 value="Voir le produit" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
					</div>
    <?php }?>

   </div>


		</div>
		 <div class="single-pro">
			
<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Produits   <span>similaires</span></h3>	
					
		  <?php		
		  foreach($product_footer_by_category as $v_product_footer_by_category){?>
					 <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img style="height: 100%; width: 100%;"  src="{{URL::to($v_product_footer_by_category->image)}}" alt="" class="pro-image-front">
										<img style="height: 100%; width: 100%;" src="{{URL::to($v_product_footer_by_category->image)}}" alt="" class="pro-image-back">
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
																	<input  onclick="location.href='{{URL::to('/detail_produit/'.Crypt::encrypt($v_product_footer_by_category->id))}}'"; type="button" name="" value="Voir le produit" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
					 </div>
		 <?php }?>

                
							<div class="clearfix"> </div>
					<!--//slider_owl-->
		         </div>
							
		</div>
	</div>
</div>
<script type="text/javascript">
	 $('#homme_id').on('click', function() {
      $('#tout_produit_id').hide();
      $('#produit_femme').hide();
      $('#produit_homme').show();
      $('b').text('HOMMES');
    });

	 $('#dame_id').on('click', function() {
      $('#tout_produit_id').hide();
      $('#produit_homme').hide();
      $('#produit_femme').show();
      $('b').text('DAMES');
    });

	 $('#enfant_id').on('click', function() {
      $('#tout_produit_id').hide();
      $('#produit_homme').hide();
      $('#produit_femme').hide();
      $('#produit_enfant').show();
      $('b').text('ENFANTS');
      
    });

</script>


@endsection