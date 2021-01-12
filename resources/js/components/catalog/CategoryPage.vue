<template>
	<div>
		<appHeader/>
		<div class="category-page">
			<div class="row w-100 m-auto">
				<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
					<h6 class="filter-by">FILTER BY</h6>
					<div class="filter-wrapper">
						<h6 class="filter-title" @click="catArrowRotate(); showCat = !showCat">FILTER BY CATEGORY <span class="filter-title-arrow cat-filter-arrow"></span></h6>
						<transition name="v-slide-fade">
							<ul class="category-filter-list" v-show="showCat">
								<li>
									<input type="checkbox">
									<router-link :to="{name: ''}">Set & Suits</router-link>
								</li>
								<li>
									<input type="checkbox">
									<router-link :to="{name: ''}">Shirt</router-link>
								</li>
								<li>
									<input type="checkbox">
									<router-link :to="{name: ''}">Pant</router-link>
								</li>
							</ul>
						</transition>
					</div>
					<div class="hrborder"></div>
					<div class="filter-wrapper">
						<h6 class="filter-title" @click="brandArrowRotate(); showBrand = !showBrand">FILTER BY BRAND <span class="filter-title-arrow brand-filter-arrow"></span></h6>
						<transition name="v-slide-fade">
							<ul class="brand-filter-list" v-show="showBrand">
								<li>
									<input type="checkbox" for="abd">
									<router-link :to="{name: ''}" id="abc">ABC</router-link>
								</li>
								<li>
									<input type="checkbox">
									<router-link :to="{name: ''}">Ampa</router-link>
								</li>
								<li>
									<input type="checkbox">
									<router-link :to="{name: ''}">Anmol Baby</router-link>
								</li>
							</ul>
						</transition>
					</div>
					<div class="hrborder"></div>
					<div class="filter-wrapper">
						<h6 class="filter-title" @click="priceArrowRotate(); showPrice = !showPrice">PRICE<span class="filter-title-arrow price-filter-arrow"></span></h6>
						<transition name="v-slide-fade">
							<ul class="brand-filter-list" v-show="showPrice">
								<li>
									<VueSimpleRangeSlider
									style="width: 300px"
									:min="0"
									:max="1000000"
									:logarithmic="true"
									v-model="range"
									/>
								</li>
							</ul>
						</transition>
					</div>
					<div class="hrborder"></div>
				</div>
				<div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
					<div class="row w-100 m-auto product-row"> 
						<div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 product-item"  v-for="index in 10" :key="index">
							<router-link class="item-body" :to="'/product/details/'+encodeURIComponent('product-details')">
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
	import "vue-essential-transitions"
	import VueSimpleRangeSlider from 'vue-simple-range-slider'
	import 'vue-simple-range-slider/dist/vueSimpleRangeSlider.css'
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
				showCat: true,
				showBrand: true,
				showPrice: true,
				range: [20,1000],
				number: 10
			}
		},
		mounted(){

		},
		methods:{
			catArrowRotate(){
				if (this.showCat ==  true) {
					$('.cat-filter-arrow').removeClass('arrowRight');
				}
				else {
					$('.cat-filter-arrow').addClass('arrowRight');
				}
			},
			brandArrowRotate(){
				if (this.showBrand == true) {
					$('.brand-filter-arrow').removeClass('arrowRight');
				}
				else {
					$('.brand-filter-arrow').addClass('arrowRight');
				}
			},
			priceArrowRotate(){
				if (this.showPrice == true) {
					$('.price-filter-arrow').removeClass('arrowRight');
				}
				else {
					$('.price-filter-arrow').addClass('arrowRight');
				}
			}
		},

		components: { 
			appHeader,
			appFooter,
			VueSimpleRangeSlider 
		}
	}
</script>
<style>
.v-slide-fade-leave-to{
	transition: .3s!important;
}
.arrowRight{
	transform: rotate(-90deg);
}
.simple-range-slider-popover label{
	margin: auto!important;
}
.simple-range-slider .simple-range-slider-bg-bar .simple-range-slider-bar {
	background: #3490dc!important;
}
</style>