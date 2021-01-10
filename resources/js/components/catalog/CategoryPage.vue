<template>
	<div>
		<appHeader/>
		<div class="category-page">
			<div class="row w-100 m-auto">
				<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
					<h6 class="filter-by">FILTER BY</h6>
				</div>
				<div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
					<div class="row w-100 m-auto product-row"> 
						<div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 product-item"  v-for="index in 10" :key="index">
							<router-link class="item-body" :to="{name: 'categorypage', query: {catName: 'GIRL Fashion' }}">
								<div class="card">
									<img class="card-img-top" src="http://cdn.fcglcdn.com/brainbees/images/products/438x531/618567a.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title hideOnHover">Baby Peony Dress Set - Aqua</h5>
										<p class="card-text">
											<span class="sale-price">৳ 500 </span><s class="cut-price">৳ 600</s><span class="percent-off">25% OFF</span>
										</p>
										<div class="action text-center">
											<router-link to="" class="btn btn-primary activeOnHover">ADD TO CART</router-link>
											<!-- <router-link to="/hello" class="btn btn-primary">SHORTLIST</router-link> -->
										</div>

									</div>
								</div>
							</router-link>
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
			title: 'Category Page',
			titleTemplate: '%s - Kidsparadise',
			htmlAttrs: {
				lang: 'en',
				amp: true
			}
		},
		data(){
			return {
				// cusName: this.$route.params.catName,
				catName: this.$route.query.catName,
			}
		},
		mounted(){

		},
		methods:{

		},

		components: { 
			appHeader,
			appFooter
		}
	}
</script>