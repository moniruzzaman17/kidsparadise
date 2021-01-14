<template>
	<div class="w-100">
		<appHeader/>
		<div class="checkout-wrapper">
			<div class="container">
				<div class="w-100">
					<div class="row w-100 m-auto">
						<div class="col-12 col-sm-12 col-md-4 customer-wrapper">
							<div class="w-100 customer-info">
								<sapn class="title">1. Customer Info</sapn>
								<div class="w-100 info-body">
									
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-4 delivery-wrapper">
							<div class="w-100 delivery-info">
								<sapn class="title">2. Delivery Info</sapn>
							</div>
						</div>
						<div class="col-12 col-sm-12- col-md-4 overview-wrapper">
							<div class="w-100 overview-info">
								<sapn class="title">3. Overveiw</sapn>
							</div>
						</div>
					</div>
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
    },
    components: { 
    	appHeader,
    	appFooter
    }
}
</script>
