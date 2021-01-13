<template>
	<div>
		<appHeader/>
		<div class="product-details-page w-100">
			<div class="w-100 product-info-wrapper" style="background: white; padding-top: 20px;">
				<div class="row container m-auto">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-0">
						<div class="product-gallery">
							<div class="row w-100 m-auto d-flex align-items-center">
								<div class="order-sm-2 order-2 order-md-1 col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 side-product-gallary">
									<div class="container-fluid">
										<div id="demo" class="carousel slide vert" data-ride="carousel" data-interval="3000">
											<div class="row no-gutters">
												<div class="carousel-indicators">
													<div data-target="#demo" data-slide-to="0" class="item active">
														<img id="img" src="https://cdn.fcglcdn.com/brainbees/images/products/438x531/2830930a.jpg" alt="" @click="updateSrc">
													</div>
													<div data-target="#demo" data-slide-to="1" class="item">
														<img src="https://cdn.fcglcdn.com/brainbees/images/products/438x531/2830930b.jpg" alt="" @click="updateSrc">
													</div>
													<div data-target="#demo" data-slide-to="2" class="item">
														<img src="https://cdn.fcglcdn.com/brainbees/images/products/438x531/2830930c.jpg" alt="" @click="updateSrc">
													</div>
													<div data-target="#demo" data-slide-to="3" class="item">
														<img src="https://cdn.fcglcdn.com/brainbees/images/products/438x531/2830930d.jpg" alt="" @click="updateSrc">
													</div>
												</div>
											</div><!--row-->
										</div><!--container--></div>
									</div>
									<div class="order-sm-1 order-1 order-md-2 col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
										<div class="product-img-view">
											<image-magnifier :src="image"
											:zoom-src="image"
											width="100%"
											height="100%"
											zoom-width="400"
											zoom-height="400"></image-magnifier>
										</div>
										<div class="action d-flex justify-content-between">
											<router-link class="action-button" :to="{name: ''}" style="width: 46%">ADD TO CART</router-link>
											<router-link class="action-button" :to="{name: ''}" style="width: 46%; border: 1px solid #bdbdbd; color: #616161; background: white;"><i class="far fa-heart" style="margin-left: 10px;"></i> SHORTLIST</router-link>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
							<div class="product-info">
								<div class="top-info">
									<h1 class="product-title">Babyhug Full Sleeves Floral Embroidered Lehenga Set - Navy Blue Pink</h1>
									<p class="short-description">4 to 5 Years, stylish and comfortable full length lehenga with round neck blouse and dupatta for girls</p>
									<div class="hrborder"></div>
									<div class="pricing">
										<span class="sale-price">৳ 550</span>
										<s class="cut-price">৳ 725</s>
										<span class="percent-off">(24% OFF)</span>
									</div>
								</div>
								<div class="middle-info">
									<div class="attribute-color-wrapper">
										<p class="d-flex align-items-center m-0">COLOR:</p>
										<div class="color-swatch"></div>
									</div>
									<div class="attribute-size-wrapper">
										<p class="d-flex align-items-center m-0">SIZE:</p>
										<div class="size-swatch">
											<span class="size-option">12-18 M</span>
											<span class="size-option">18-24 M</span>
											<span class="size-option">3-4 Y</span>
											<span class="size-option">4-5 Y</span>
											<span class="size-option">5-6 Y</span>
										</div>
									</div>
								</div>
								<div class="bottom-info">
									<div class="description-wrapper">
										<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hrborder"></div>
				<div class="w-100 product-bottom-info" style="background: white;">
					<div class="product-bottom-wrapper row container m-auto">
						<div class="related-product-wrapper w-100">
							<h1 class="title">YOU MAY ALSO LIKE</h1>
							<div class="related-product-gallery">
								<carousel :loop="false" :autoplay="true" :autoplayTimeout="5000" :autoplaySpeed="2000" :autoplayHoverPause="true" :nav="true" :dots="false" :responsive="{0:{items:2,nav:false},769:{items:5,nav:false}}">
									<div class="product-item" v-for="index in 10" :key="index">
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


									<template slot="prev"><transition name="v-slide-fade"><span class="prev">&laquo;</span></transition></template><template slot="next"><transition name="v-slide-fade"><span class="next">&raquo;</span></transition></template>
								</carousel>
							</div>
						</div>
						<div class="hrborder"></div>
						<div class="reviewRating-wrapper w-100">
							<h1 class="title">RATINGS & REVIEWS</h1>
							<div class="row w-100 m-auto">
								<div class="col-12 col-sm-12 col-md-3 order-2">
									<!-- <img src="/medias/rating-star.jpg" alt=""> -->
								</div>
								<div class="col-12 col-sm-12 col-md-9 order-1">
									<form action="" method="POST" style="padding: 18px" class="w-100">
										<div class="form-group row m-auto">
											<label for="rating" class="col-2 col-sm-2 col-form-label required">Rating</label>
											<div class="col-10 col-sm-10">
												<div id="full-stars-example">
													<div class="rating-group">
														<input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
														<label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
														<input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
														<label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
														<input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
														<label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
														<input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
														<label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
														<input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
														<label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
														<input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row m-auto review">
											<label for="review" class="col-2 col-sm-2 col-form-label required">Review</label>
											<div class="col-10 col-sm-10 review-box">
												<textarea name="" id="review" cols="30" rows="10" class="review-textarea"></textarea>
											</div>
										</div>
										<div class="form-group row m-auto review">
											<label for="review" class="col-2 col-sm-2 col-form-label"></label>
											<div class="col-10 col-sm-10 review-box">
												<input type="submit" value="Review this Product" class="action-button">
											</div>
										</div>
									</form>
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
		import carousel from 'vue-owl-carousel'
		import appHeader from '../includes/Header'
		import appFooter from '../includes/Footer'
		import "vue-essential-transitions"
		export default {
			metaInfo: {
				title: 'Product Details',
				titleTemplate: '%s - Kidsparadise',
				htmlAttrs: {
					lang: 'en',
					amp: true
				}
			},
			data(){
				return {
				// cusName: this.$route.params.catName,
				getName: this.$route.params.pname,
				image: 'https://cdn.fcglcdn.com/brainbees/images/products/438x531/2830930a.jpg',
			}
		},
		mounted(){

		},
		methods:{
			updateSrc(img){
				this.image = img.srcElement.src;
			}
		},

		components: { 
			appHeader,
			appFooter,
			carousel
		}
	}
</script>
<style>
.prev {

}

.next {

}
/*.prev i, .next i {transform : scale(1,6); color: #ccc;}*/
</style>