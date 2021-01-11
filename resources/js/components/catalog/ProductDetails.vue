<template>
	<div>
		<appHeader/>
		<div class="product-details-page container">
			<div class="row w-100 m-auto">
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-0">
					<div class="product-gallery">
						<div class="row w-100 m-auto d-flex align-items-center">
							<div class="order-sm-2 order-2 order-md-1 col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 side-product-gallary">
								<div class="container-fluid">
									<div id="demo" class="carousel slide vert" data-ride="carousel" data-interval="3000">
										<div class="row no-gutters">
											<!-- <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 p-0"> -->
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
												<!-- </div>col-sm-4 Indicators -->
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
										<p class="d-flex align-items-center m-0">Color:</p>
										<div class="color-swatch"></div>
									</div>
								</div>
								<div class="bottom-info">

								</div>
							</div>
						</div>
					</div>
					This is product details page ({{getName}})
				</div>
				<appFooter/>
			</div>
		</template>
		<script>
			import carousel from 'vue-owl-carousel';
			import appHeader from '../includes/Header'
			import appFooter from '../includes/Footer'
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