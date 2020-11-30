<template>
	<div>
		<div class="desktop">
			<carousel :items="1" :loop="true" :autoplay="true" :autoplayTimeout="5000" :autoplaySpeed="1000" :autoplayHoverPause="false" :nav="true" >
				<img class="img-fluid" src="https://www.shuddhoraj.com.bd/media/top/top1.jpg">
				<img class="img-fluid" src="https://www.shuddhoraj.com.bd/media/top/top1.jpg">
				<img class="img-fluid" src="https://www.shuddhoraj.com.bd/media/top/top1.jpg">
				<img class="img-fluid" src="https://www.shuddhoraj.com.bd/media/top/top1.jpg">
			</carousel>
		</div>
		<div class="mobile">
			<carousel :items="1" :loop="true" :autoplay="true" :autoplayTimeout="5000" :autoplaySpeed="1000" :autoplayHoverPause="false" :nav="false" :dots="false" >
				<img class="img-fluid" src="https://www.shuddhoraj.com.bd/media/top/mtop1.jpg">
				<img class="img-fluid" src="https://www.shuddhoraj.com.bd/media/top/mtop1.jpg">
				<img class="img-fluid" src="https://www.shuddhoraj.com.bd/media/top/mtop1.jpg">
				<img class="img-fluid" src="https://www.shuddhoraj.com.bd/media/top/mtop1.jpg">
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