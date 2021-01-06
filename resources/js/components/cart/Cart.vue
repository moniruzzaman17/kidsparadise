<template>
	<div class="w-100">
		<div class="w-100">
			<appHeader/>
		</div>
		<div class="w-100 cart-wrapper container">
			<b-tabs content-class="mt-3" left>
				<b-tab title="Shopping Cart" active>
					<div class="empty-cart-wrapper">
						<div class="empty-cart-img-wrapper">
							<img class="img" src="medias/emty-cart-img.webp" alt="empty cart">
						</div>
						<h2 class="empty-cart-title text-center">Your Cart Is Currently Empty</h2>
						<p class="empty-cart-subtitle text-center">We recommend you to browse through our popular categories.</p>

						<p class="w-100 text-center"><router-link :to="{name: 'home'}" class="action-button">Continue Shopping</router-link></p>
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
					$(window).on('load', function () {
						$(".scroll-fixed-header").removeClass("is-fixed");
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