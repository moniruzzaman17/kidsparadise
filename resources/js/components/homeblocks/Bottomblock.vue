<template>
	<div>
		<div class="w-100 bottom-block-body">
			<div class="container">
				<div class="bottom-block">
					<div class="row w-100 text-center m-auto banner-block">
						<div class="col-12 col-sm-12 col-sm-12 col-ls-12 col-xl-12 one-banner-col p-0">
							<a href=""><img class="w-100 h-100" src="/medias/bottom-banner.webp" alt=""></a>
						</div>
					</div>
				</div>
				<div class="bottom-block">
					<div class="row w-100 text-center m-auto banner-block">
						<div class="col-12 col-sm-12 col-sm-12 col-ls-12 col-xl-12 bottom-brand-banner-col p-0">
							<div class="top-brand-bg" style="height: 80px;">
								
							</div>
							<carousel :responsive="{0:{items:3,nav:false},700:{items:8,nav:false}}" :items="6" :loop="true" :autoplay="true" :autoplayTimeout="5000" :autoplaySpeed="1000" :autoplayHoverPause="false" :nav="false" :dots="false" >
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
								<a href=""><img class="img-fluid" src="/medias/brands/chicco-logo.webp"></a>
							</carousel>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	import carousel from 'vue-owl-carousel';
	export default {
		components: { carousel }
	}
</script>