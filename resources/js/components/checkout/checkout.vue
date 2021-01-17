<template>
	<div class="w-100">
		<appHeader/>
		<div class="checkout-wrapper">
			<div class="container">
				<div class="w-100">
					<form action="" method="" class="form" style="margin-top: 18px;">
						<div class="row w-100 m-auto">
							<div class="col-12 col-sm-12 col-md-4 customer-wrapper">
								<div class="w-100 customer-info">
									<sapn class="title">1. SHIPPING & BILLING INFO</sapn>
									<div class="w-100 info-body">
										<div class="form-group row w-100 m-auto">
											<label class="form-label required" for="name">Enter Your Full Name</label>
											<input id="name" class="form-input" type="text" />
										</div>
										<div class="form-group row w-100 m-auto">
											<label class="form-label required" for="number">Enter Your Valid Phone Number</label>
											<input id="number" class="form-input" type="text" />
										</div>
										<div class="form-group row w-100 m-auto">
											<label class="form-label required" for="address1">Delivery Address 1</label>
											<input id="address1" class="form-input" type="text" />
										</div>
										<div class="form-group row w-100 m-auto">
											<label class="form-label" for="address2">Delivery Address 2</label>
											<input id="address2" class="form-input" type="text" />
										</div>
										<div class="form-group row w-100 m-auto">
											<label class="form-label required" for="city">City</label>
											<input id="city" class="form-input" type="text" />
										</div>
										<div class="form-group row w-100 m-auto">
											<label class="form-label required" for="postcode">Zip/Postal Code</label>
											<input id="postcode" class="form-input" type="text" />
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-4 delivery-wrapper">
								<div class="w-100 delivery-info">
									<sapn class="title">2. SHIPPING METHOD</sapn>
									<div class="form-group row w-100 m-auto">
										<input id="dhaka" class="form-input" name="shipping_method" type="radio" />
										<label class="form-label" for="dhaka">Inside Dhaka</label>
									</div>
									<div class="form-group row w-100 m-auto">
										<input id="outsidedhaka" class="form-input" name="shipping_method" type="radio" />
										<label class="form-label" for="outsidedhaka">Outside Dhaka</label>
									</div>
								</div><br>
								<div class="w-100 delivery-info">
									<sapn class="title">3. PAYMENT METHOD</sapn>

									<div class="form-group row w-100 m-auto">
										<div class="col-8 col-sm-8 p-0">
											<input id="cod" class="form-input " name="payment_method" type="radio" />
											<label class="form-label" for="cod">Cash on Delivery</label>
										</div>
										<div class="col-4 col-sm-4 p-0 text-center">
											<img class="w-50" src="/medias/cod.png" alt="">
										</div>
									</div>
									<div class="form-group row w-100 m-auto">
										<div class="col-8 col-sm-8 p-0">
											<input id="online" class="form-input " name="payment_method" type="radio" />
											<label class="form-label" for="online">Pay Online</label>
										</div>
										<div class="col-4 col-sm-4 p-0 text-center">
											<img class="w-100" src="/medias/pay-online.png" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12- col-md-4 overview-wrapper">
								<div class="w-100 overview-info">
									<sapn class="title">4. REVIEW YOUR ORDER</sapn>
									<div class="product-info">
										<div class="row w-100 m-auto d-flex align-items-center checkout-product-item">
											<div class="col-8 col-sm-8 p-0">
												Product
											</div>
											<div class="col-2 col-sm-2 p-0">
												Qty
											</div>
											<div class="col-2 col-sm-2 p-0">
												Subtotal
											</div>
										</div>
										<div class="row w-100 m-auto d-flex align-items-center checkout-product-item" v-for="n in 3">
											<div class="col-8 col-sm-8 p-0">
												Pine Kids Full Sleeves Padded Jacket
											</div>
											<div class="col-2 col-sm-2 p-0">
												1
											</div>
											<div class="col-2 col-sm-2 p-0">
												৳ 500
											</div>
										</div>
										<div class="row w-100 m-auto d-flex align-items-center checkout-product-item">
											<div class="col-10 col-sm-10 p-0">
												<p>Subtotal</p>
											</div>
											<div class="col-2 col-sm-2 p-0">
												৳ 500
											</div>
										</div>
										<div class="row w-100 m-auto d-flex align-items-center checkout-product-item">
											<div class="col-10 col-sm-10 p-0">
												<p>Discount(-)</p>
											</div>
											<div class="col-2 col-sm-2 p-0">
												৳ 0
											</div>
										</div>
										<div class="row w-100 m-auto d-flex align-items-center checkout-product-item">
											<div class="col-10 col-sm-10 p-0">
												<p>Shipping & Handling(+)</p>
											</div>
											<div class="col-2 col-sm-2 p-0">
												৳ 60
											</div>
										</div>
										<div class="row w-100 m-auto d-flex align-items-center checkout-product-item">
											<div class="col-10 col-sm-10 p-0">
												<p>Grand Total</p>
											</div>
											<div class="col-2 col-sm-2 p-0">
												৳ 560
											</div>
										</div>
									</div>
									<hr class="dotted-line">
									<div class="coupon">
										<div class="form-group row w-100 m-auto">
											<label class="form-label" for="checkout_coupono">Enter your coupon here</label>
											<input id="checkout_coupono" class="form-input" type="text" />
											<button class="action-button" style="margin: 8px 0px 10px; padding: 8px;">Apply</button>
										</div>
									</div>
									<hr class="dotted-line">
									<div class="comments">
										<div class="form-group row w-100 m-auto">
											<label class="form-label" for="comment">Any Comments</label>
											<input id="comment" class="form-input" type="text" />
										</div>
									</div>

									<button class="action-button" type="submit" style="margin: 8px 0px 10px; padding: 8px;">Place Order Now</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<appFooter/>
	</div>
</template>

<script>
	import appHeader from '../includes/Header'
	import appFooter from '../includes/Footer'

	export default {
		metaInfo: {
			title: 'Checkout',
			titleTemplate: '%s - kidsparadise',
			htmlAttrs: {
				lang: 'en',
				amp: true
			},
			meta: [
			{ name: 'keywords', content: 'kidsparadise, baby products, baby products online, baby products india, online shopping for kids, kids online shopping, baby online shopping, baby care products' }
			]
		},
		data(){
			return {
            // userId: ''
        }
    },
    mounted() {
    	console.log('Checkout Component mounted.')
        // this.userId = this.$route.query.mn
        this.jquery();
    },
    methods:{
    	jquery(){
    		$(document).ready(function() {
    			$('.customer-info input').focus(function(){
    				$(this).parents('.form-group').addClass('focused');
    			});

    			$('.customer-info input').blur(function(){
    				var inputValue = $(this).val();
    				if ( inputValue == "" ) {
    					$(this).removeClass('filled');
    					$(this).parents('.form-group').removeClass('focused');  
    				} else {
    					$(this).addClass('filled');
    				}
    			});

    			// for coupon
    			$('.coupon input').focus(function(){
    				$(this).parents('.form-group').addClass('focused');
    			});

    			$('.coupon input').blur(function(){
    				var inputValue = $(this).val();
    				if ( inputValue == "" ) {
    					$(this).removeClass('filled');
    					$(this).parents('.form-group').removeClass('focused');  
    				} else {
    					$(this).addClass('filled');
    				}
    			});

    			// for comments
    			$('.comments input').focus(function(){
    				$(this).parents('.form-group').addClass('focused');
    			});

    			$('.comments input').blur(function(){
    				var inputValue = $(this).val();
    				if ( inputValue == "" ) {
    					$(this).removeClass('filled');
    					$(this).parents('.form-group').removeClass('focused');  
    				} else {
    					$(this).addClass('filled');
    				}
    			});
    		});
    	}
    },
    components: { 
    	appHeader,
    	appFooter
    }
}
</script>
