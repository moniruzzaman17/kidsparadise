<template>
	<div class="w-100">
		<div class="w-100">
			<appHeader/>
		</div>
		<div class="w-100 cart-wrapper container">
			<b-tabs content-class="" left>
				<b-tab title="Shopping Cart" active>
					<!-- <div class="empty-cart-wrapper">
						<div class="empty-cart-img-wrapper">
							<img class="img" src="medias/emty-cart-img.webp" alt="empty cart">
						</div>
						<h2 class="empty-cart-title text-center">Your Cart Is Currently Empty</h2>
						<p class="empty-cart-subtitle text-center">We recommend you to browse through our popular categories.</p>

						<p class="w-100 text-center"><router-link :to="{name: 'home'}" class="action-button">Continue Shopping</router-link></p>
					</div> -->
					<div class="product-cart-wrapper w-100">
						<div class="row m-auto w-100 cart-wrapper d-flex justify-content-between">
							<div class="col-12 col-sm-12 col-md-8 p-0">
								<div class="cart-col w-100 cart-item" v-for="n in 10">
									<div class="row w-100 m-auto cart-card-content">
										<div class="productImg col-4 col-sm-4 col-md-2">
											<img class="cart-card-img" src="https://cdn.fcglcdn.com/brainbees/images/products/thumb/3721976a.webp" alt="">
										</div>
										<div class="cart-card-content-info-1 col-8 col-sm-8 col-md-7">
											<router-link :to="{name: ''}" class="content-title">Pine Kids Full Sleeves Padded Jacket Polka Dot Print - Navy Blue</router-link>
											<div class="product-config">

											</div>
											<div :class="'cart-card-content-info-2 col-12 col-sm-8 col-md-3 mobile-cart-transformation mobile'">
												<span class="price">৳ 500</span>
												<div>
													<s class="cut-price">৳ 600</s>
													<span class="percent-off">26% OFF</span>
												</div>
												<div class="qty">
													<label for="">Qty: &nbsp;</label>
													<div style="border: 1px solid #eaeaea;" class="row w-100 m-auto d-flex align-items-center">
														<span style="cursor: pointer;" @click="decreaseQty(n)" class="minus col-4 col-sm-4"><i class="fa fa-minus" aria-hidden="true"></i></span>
														<input ref="qty" :class="'quantity'+n+' product-qty col-4 col-sm-4'"  min="1" max="10" name="details_qty" value="1" type="number"readonly="readonly">
														<span style="cursor: pointer;" @click="increaseQty(n)"  class="plus"><i class="fas fa-plus col-4 col-sm-4"></i></span>
													</div>
												</div>
												<div class="action">
													<button class="btn trash-button"><i class="fa fa-trash"></i></button>
													<button class="btn shortlist-button"><i class="fa fa-heart" aria-hidden="true"></i></button>
												</div>
											</div>
										</div>
										<div class="cart-card-content-info-2 col-12 col-sm-8 col-md-3 desktop">
											<span class="price">৳ 500</span>
											<div>
												<s class="cut-price">৳ 600</s>
												<span class="percent-off">26% OFF</span>
											</div>
											<div class="qty">
												<label for="">Qty: &nbsp;</label>
												<div style="border: 1px solid #eaeaea;" class="row w-100 m-auto d-flex align-items-center">
													<span style="cursor: pointer;" @click="decreaseQty(n)" class="minus col-4 col-sm-4"><i class="fa fa-minus" aria-hidden="true"></i></span>
													<input ref="qty" :class="'quantity'+n+' product-qty col-4 col-sm-4'"  min="1" max="10" name="details_qty" value="1" type="number"readonly="readonly">
													<span style="cursor: pointer;" @click="increaseQty(n)"  class="plus"><i class="fas fa-plus col-4 col-sm-4"></i></span>
												</div>
											</div>
											<div class="action">
												<button class="btn trash-button"><i class="fa fa-trash"></i></button>
												<button class="btn shortlist-button"><i class="fa fa-heart" aria-hidden="true"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-4 p-0">
								<div class="discount-coupon">
									<span class="title">Deal & Discount</span>
									<form action="" method="" class="form" style="margin-top: 18px;">
										<div class="form-group row w-100 m-auto">
											<label class="form-label" for="first">Enter your coupon here</label>
											<input id="first" class="form-input" type="text" />
											<button class="coupon-apply-btn">Apply</button>
										</div>
									</form>
								</div>
								<div class="cart-details-col">
									<span class="title">Cart Overveiw</span>
									<div class="overview-wrapper">
										<p>Value of Product(s) <span>৳ 500</span></p>
										<p>Discount(-) <span class="text-green">৳ 30</span></p>
										<p>Shipping & Handling <span>৳ 90</span></p>
										<hr class="dotted-line">
										<p>Sub Total <span>৳ 460</span></p>
										<hr class="dotted-line">
										<p>Grand Total <span>৳ 460</span></p>
									</div>
								</div>
								<div class="action-col">
									<div class="action-wrapper">
										<router-link :to="{name: 'checkout'}" class="action-button">Proceed to Checkout</router-link>
									</div>
								</div>
							</div>
						</div>
					</div>
				</b-tab>
				<b-tab title="My Shortlist">
					<div class="empty-shortlist-wrapper">
						<div class="empty-shortlist-img-wrapper">
							<img class="img" src="medias/emty-shortlist-img.webp" alt="empty shortlist">
						</div>
						<h2 class="empty-shortlist-title text-center">Your shortlist Is Currently Empty</h2>
						<p class="empty-shortlist-subtitle text-center">We recommend you to browse through our popular categories.</p>

						<p class="w-100 text-center text-center"><router-link :to="{name: 'home'}" class="action-button">Continue Shopping</router-link></p>
					</div>
				</b-tab>
			</b-tabs>
		</div>
		<div class="w-100">
			<appFooter/>
		</div>
	</div>
</template>
<script>
	import appHeader from '../includes/Header'
	import appFooter from '../includes/Footer'
	export default {
		metaInfo: {
			title: 'Shopping Cart',
			titleTemplate: '%s - Kidsparadise',
			htmlAttrs: {
				lang: 'en',
				amp: true
			}
		},
		data(){
			return {

			}
		},
		mounted(){
			this.jquery();
		},
		methods:{
			jquery(){
				$(document).ready(function() {
					$('input').focus(function(){
						$(this).parents('.form-group').addClass('focused');
					});

					$('input').blur(function(){
						var inputValue = $(this).val();
						if ( inputValue == "" ) {
							$(this).removeClass('filled');
							$(this).parents('.form-group').removeClass('focused');  
						} else {
							$(this).addClass('filled');
						}
					});

					setInterval(() => {
						var w = window.innerWidth;
						if (w <= 768) {
							this.clientsTestimonialsPages = 1
						}
						else {
							this.clientsTestimonialsPages = 4
						}
					}, 100);
				});
			},
			decreaseQty(n){
				console.log('Inside decreaseQty');
				if (parseInt($('.quantity'+n).val()) > 1) {
					$({ val: parseInt($('.quantity'+n).val()) }).animate({ val: parseInt($('.quantity'+n).val())-1 }, { step: function(val) {$('.quantity'+n).val(val) }});
					
				}
			},
			increaseQty(n){
				console.log('Inside increaseQty');
				if (parseInt($('.quantity'+n).val()) < 10) {
					$({ val: parseInt($('.quantity'+n).val()) }).animate({ val: parseInt($('.quantity'+n).val())+1 }, { step: function(val) {$('.quantity'+n).val(val) }});
				}

			}
		},

		components: { 
			appHeader,
			appFooter
		}
	}
</script>