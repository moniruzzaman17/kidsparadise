<template>
	<div>
		<div class="desktop">
			<carousel :items="1" :loop="true" :autoplay="true" :autoplayTimeout="5000" :autoplaySpeed="2000" :autoplayHoverPause="true" :nav="false" :dots="false" >
				<img class="img-fluid" src="/medias/top1.webp">
				<img class="img-fluid" src="/medias/top1.webp">
				<img class="img-fluid" src="/medias/top1.webp">
				<img class="img-fluid" src="/medias/top1.webp">
			</carousel>
		</div>
		<div class="mobile">
			<carousel :items="1" :loop="true" :autoplay="true" :autoplayTimeout="5000" :autoplaySpeed="2000" :autoplayHoverPause="true" :nav="false" :dots="false" >
				<img class="img-fluid" src="/medias/mtop1.webp">
				<img class="img-fluid" src="/medias/mtop1.webp">
				<img class="img-fluid" src="/medias/mtop1.webp">
				<img class="img-fluid" src="/medias/mtop1.webp">
			</carousel>
		</div>

	</div>
</template>
<script>
	import carousel from 'vue-owl-carousel';
	export default {
		components: { carousel }
	}
</script>